<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $name
 * @property int|null $numberOfAssociatedResourceConfigurations
 * @property int|null $numberOfAssociatedServices
 * @property int|null $numberOfAssociatedVPCs
 */
class ServiceNetworkSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     numberOfAssociatedResourceConfigurations?: int|null,
     *     numberOfAssociatedServices?: int|null,
     *     numberOfAssociatedVPCs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
