<?php
/**
 * @author     Sashas IT Support <support@sashas.org>
 * @copyright  2018  Sashas IT Support Inc. (http://www.extensions.sashas.org)
 * @license     http://opensource.org/licenses/GPL-3.0  GNU General Public License, version 3 (GPL-3.0)
 */

namespace Sashas\BugFromEmail\Rewrite\Sales\Model\Order\Email;

class SenderBuilder extends \Magento\Sales\Model\Order\Email\SenderBuilder
{

    /**
     * Configure email template
     *
     * @return void
     */
    protected function configureEmailTemplate()
    {
        $this->transportBuilder->setTemplateIdentifier($this->templateContainer->getTemplateId());
        $this->transportBuilder->setTemplateOptions($this->templateContainer->getTemplateOptions());
        $this->transportBuilder->setTemplateVars($this->templateContainer->getTemplateVars());
        /*Send From Email Issue #14952*/
        $this->transportBuilder->setFromByStore(
            $this->identityContainer->getEmailIdentity(),
            $this->identityContainer->getStore()->getId()
        );
        /*Send From Email Issue #14952*/

//        $this->transportBuilderByStore->setFromByStore(
//            $this->identityContainer->getEmailIdentity(),
//            $this->identityContainer->getStore()->getId()
//        );
    }
}