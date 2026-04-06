<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListRouterNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'PUBLIC'|'VPC' $NetworkInterfaceType
 * @property int $AssociatedOutputCount
 * @property int $AssociatedInputCount
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'ERROR'|'RECOVERING' $State
 * @property string $RegionName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class ListedRouterNetworkInterface extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     NetworkInterfaceType: 'PUBLIC'|'VPC',
     *     AssociatedOutputCount: int,
     *     AssociatedInputCount: int,
     *     State: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'ERROR'|'RECOVERING',
     *     RegionName: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
