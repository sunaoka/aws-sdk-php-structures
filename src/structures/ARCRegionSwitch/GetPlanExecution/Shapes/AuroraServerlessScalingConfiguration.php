<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string $globalClusterIdentifier
 * @property array<string, string> $regionDatabaseClusterArns
 * @property int|null $targetPercent
 */
class AuroraServerlessScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     globalClusterIdentifier: string,
     *     regionDatabaseClusterArns: array<string, string>,
     *     targetPercent?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
