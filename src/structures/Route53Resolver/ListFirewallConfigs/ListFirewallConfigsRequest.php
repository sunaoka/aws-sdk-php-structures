<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFirewallConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<5, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
