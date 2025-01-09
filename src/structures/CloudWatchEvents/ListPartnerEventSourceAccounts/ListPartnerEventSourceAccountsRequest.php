<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListPartnerEventSourceAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceName
 * @property string $NextToken
 * @property int<1, 100> $Limit
 */
class ListPartnerEventSourceAccountsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceName: string,
     *     NextToken?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
