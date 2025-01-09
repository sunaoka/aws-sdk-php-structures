<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPartnerAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 250> $MaxResults
 */
class ListPartnerAccountsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
