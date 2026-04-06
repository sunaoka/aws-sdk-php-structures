<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GatewayGroupArn
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     GatewayGroupArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
