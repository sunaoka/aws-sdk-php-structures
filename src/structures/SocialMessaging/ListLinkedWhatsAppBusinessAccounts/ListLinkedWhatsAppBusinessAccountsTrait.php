<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListLinkedWhatsAppBusinessAccounts;

trait ListLinkedWhatsAppBusinessAccountsTrait
{
    /**
     * @param ListLinkedWhatsAppBusinessAccountsRequest $args
     * @return ListLinkedWhatsAppBusinessAccountsResponse
     */
    public function listLinkedWhatsAppBusinessAccounts(ListLinkedWhatsAppBusinessAccountsRequest $args)
    {
        $result = parent::listLinkedWhatsAppBusinessAccounts($args->toArray());
        return new ListLinkedWhatsAppBusinessAccountsResponse($result->toArray());
    }
}
