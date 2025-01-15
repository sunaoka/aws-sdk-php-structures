<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MaxCpuUtilizationPercentage
 * @property string|null $MaxMemoryUtilizationPercentage
 * @property string|null $MaxStorageUtilizationPercentage
 * @property EBSResourceUtilization|null $EBSResourceUtilization
 * @property DiskResourceUtilization|null $DiskResourceUtilization
 * @property NetworkResourceUtilization|null $NetworkResourceUtilization
 */
class EC2ResourceUtilization extends Shape
{
    /**
     * @param array{
     *     MaxCpuUtilizationPercentage?: string|null,
     *     MaxMemoryUtilizationPercentage?: string|null,
     *     MaxStorageUtilizationPercentage?: string|null,
     *     EBSResourceUtilization?: EBSResourceUtilization|null,
     *     DiskResourceUtilization?: DiskResourceUtilization|null,
     *     NetworkResourceUtilization?: NetworkResourceUtilization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
