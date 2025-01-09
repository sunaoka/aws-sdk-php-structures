<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $DetectorId
 * @property string $AccountId
 * @property CoverageResourceDetails $ResourceDetails
 * @property 'HEALTHY'|'UNHEALTHY' $CoverageStatus
 * @property string $Issue
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 */
class CoverageResource extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     DetectorId?: string,
     *     AccountId?: string,
     *     ResourceDetails?: CoverageResourceDetails,
     *     CoverageStatus?: 'HEALTHY'|'UNHEALTHY',
     *     Issue?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
