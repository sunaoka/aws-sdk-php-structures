<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AliasId
 * @property string|null $Name
 * @property string|null $AliasArn
 * @property string|null $Description
 * @property RoutingStrategy|null $RoutingStrategy
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     AliasId?: string|null,
     *     Name?: string|null,
     *     AliasArn?: string|null,
     *     Description?: string|null,
     *     RoutingStrategy?: RoutingStrategy|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
