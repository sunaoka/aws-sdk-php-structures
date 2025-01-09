<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $failedChecks
 * @property string $scanArn
 * @property string $scanConfigurationArn
 * @property \Aws\Api\DateTimeResult $scanDate
 * @property string $scanName
 * @property string $scheduledBy
 * @property 'LEVEL_1'|'LEVEL_2' $securityLevel
 * @property 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS' $status
 * @property CisTargets $targets
 * @property int $totalChecks
 */
class CisScan extends Shape
{
    /**
     * @param array{
     *     failedChecks?: int,
     *     scanArn: string,
     *     scanConfigurationArn: string,
     *     scanDate?: \Aws\Api\DateTimeResult,
     *     scanName?: string,
     *     scheduledBy?: string,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2',
     *     status?: 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS',
     *     targets?: CisTargets,
     *     totalChecks?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
