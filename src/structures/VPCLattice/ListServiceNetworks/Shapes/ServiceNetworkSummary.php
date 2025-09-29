<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property int|null $numberOfAssociatedVPCs
 * @property int|null $numberOfAssociatedServices
 * @property int|null $numberOfAssociatedResourceConfigurations
 */
class ServiceNetworkSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     numberOfAssociatedVPCs?: int|null,
     *     numberOfAssociatedServices?: int|null,
     *     numberOfAssociatedResourceConfigurations?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
