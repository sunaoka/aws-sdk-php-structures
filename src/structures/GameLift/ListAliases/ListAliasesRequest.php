<?php

namespace Sunaoka\Aws\Structures\GameLift\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SIMPLE'|'TERMINAL'|null $RoutingStrategyType
 * @property string|null $Name
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     RoutingStrategyType?: 'SIMPLE'|'TERMINAL'|null,
     *     Name?: string|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
