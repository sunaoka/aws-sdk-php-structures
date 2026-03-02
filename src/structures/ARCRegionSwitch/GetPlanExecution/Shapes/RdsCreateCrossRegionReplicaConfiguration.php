<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property array<string, string> $dbInstanceArnMap
 */
class RdsCreateCrossRegionReplicaConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     dbInstanceArnMap: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
