<?php
/**
 * @author     Sashas IT Support <support@sashas.org>
 * @copyright  2018  Sashas IT Support Inc. (http://www.extensions.sashas.org)
 * @license     http://opensource.org/licenses/GPL-3.0  GNU General Public License, version 3 (GPL-3.0)
 */

namespace Sashas\BugFromEmail\Rewrite\Framework\Mail\Template;

class TransportBuilder extends \Magento\Framework\Mail\Template\TransportBuilder
{

    /**
     * @param $from
     * @param $store
     * @return $this
     * @throws \Magento\Framework\Exception\MailException
     */
    public function setFromByStore($from, $store)
    {
        $result = $this->_senderResolver->resolve($from, $store);
        $this->message->setFrom($result['email'], $result['name']);

        return $this;
    }

}