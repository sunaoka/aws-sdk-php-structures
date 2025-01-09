<?php

namespace Sunaoka\Aws\Structures\GameLift\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasId
 * @property string $Name
 * @property string $AliasArn
 * @property string $Description
 * @property RoutingStrategy $RoutingStrategy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     AliasId?: string,
     *     Name?: string,
     *     AliasArn?: string,
     *     Description?: string,
     *     RoutingStrategy?: RoutingStrategy,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
