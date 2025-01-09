<?php

namespace Sunaoka\Aws\Structures\GameLift\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'TERMINAL' $RoutingStrategyType
 * @property string $Name
 * @property int $Limit
 * @property string $NextToken
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     RoutingStrategyType?: 'SIMPLE'|'TERMINAL',
     *     Name?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
