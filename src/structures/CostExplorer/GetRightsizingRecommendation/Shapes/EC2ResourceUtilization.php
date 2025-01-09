<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MaxCpuUtilizationPercentage
 * @property string $MaxMemoryUtilizationPercentage
 * @property string $MaxStorageUtilizationPercentage
 * @property EBSResourceUtilization $EBSResourceUtilization
 * @property DiskResourceUtilization $DiskResourceUtilization
 * @property NetworkResourceUtilization $NetworkResourceUtilization
 */
class EC2ResourceUtilization extends Shape
{
    /**
     * @param array{
     *     MaxCpuUtilizationPercentage?: string,
     *     MaxMemoryUtilizationPercentage?: string,
     *     MaxStorageUtilizationPercentage?: string,
     *     EBSResourceUtilization?: EBSResourceUtilization,
     *     DiskResourceUtilization?: DiskResourceUtilization,
     *     NetworkResourceUtilization?: NetworkResourceUtilization
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
