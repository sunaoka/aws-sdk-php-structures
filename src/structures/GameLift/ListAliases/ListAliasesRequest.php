<?php

namespace Sunaoka\Aws\Structures\GameLift\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'TERMINAL' $RoutingStrategyType
 * @property string $Name
 * @property int<1, max> $Limit
 * @property string $NextToken
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     RoutingStrategyType?: 'SIMPLE'|'TERMINAL',
     *     Name?: string,
     *     Limit?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
