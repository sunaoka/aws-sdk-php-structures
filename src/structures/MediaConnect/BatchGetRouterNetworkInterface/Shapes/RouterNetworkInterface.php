<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Id
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'ERROR'|'RECOVERING' $State
 * @property 'PUBLIC'|'VPC' $NetworkInterfaceType
 * @property RouterNetworkInterfaceConfiguration $Configuration
 * @property int $AssociatedOutputCount
 * @property int $AssociatedInputCount
 * @property string $RegionName
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<string, string> $Tags
 */
class RouterNetworkInterface extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn: string,
     *     Id: string,
     *     State: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'ERROR'|'RECOVERING',
     *     NetworkInterfaceType: 'PUBLIC'|'VPC',
     *     Configuration: RouterNetworkInterfaceConfiguration,
     *     AssociatedOutputCount: int,
     *     AssociatedInputCount: int,
     *     RegionName: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
