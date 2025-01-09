<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property int $numberOfAssociatedResourceConfigurations
 * @property int $numberOfAssociatedServices
 * @property int $numberOfAssociatedVPCs
 */
class ServiceNetworkSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     numberOfAssociatedResourceConfigurations?: int,
     *     numberOfAssociatedServices?: int,
     *     numberOfAssociatedVPCs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
