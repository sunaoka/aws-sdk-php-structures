<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListPartnerEventSourceAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceName
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListPartnerEventSourceAccountsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceName: string,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
