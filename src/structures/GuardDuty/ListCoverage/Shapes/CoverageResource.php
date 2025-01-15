<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $DetectorId
 * @property string|null $AccountId
 * @property CoverageResourceDetails|null $ResourceDetails
 * @property 'HEALTHY'|'UNHEALTHY'|null $CoverageStatus
 * @property string|null $Issue
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class CoverageResource extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     DetectorId?: string|null,
     *     AccountId?: string|null,
     *     ResourceDetails?: CoverageResourceDetails|null,
     *     CoverageStatus?: 'HEALTHY'|'UNHEALTHY'|null,
     *     Issue?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
