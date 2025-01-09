<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListPartnerEventSourceAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceName
 * @property string $NextToken
 * @property int $Limit
 */
class ListPartnerEventSourceAccountsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceName: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
