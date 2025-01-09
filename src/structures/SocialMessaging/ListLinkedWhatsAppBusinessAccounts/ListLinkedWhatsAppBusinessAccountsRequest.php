<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListLinkedWhatsAppBusinessAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 */
class ListLinkedWhatsAppBusinessAccountsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
