<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanArn
 * @property string $scanConfigurationArn
 * @property 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS'|null $status
 * @property string|null $scanName
 * @property \Aws\Api\DateTimeResult|null $scanDate
 * @property int|null $failedChecks
 * @property int|null $totalChecks
 * @property CisTargets|null $targets
 * @property string|null $scheduledBy
 * @property 'LEVEL_1'|'LEVEL_2'|null $securityLevel
 */
class CisScan extends Shape
{
    /**
     * @param array{
     *     scanArn: string,
     *     scanConfigurationArn: string,
     *     status?: 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS'|null,
     *     scanName?: string|null,
     *     scanDate?: \Aws\Api\DateTimeResult|null,
     *     failedChecks?: int|null,
     *     totalChecks?: int|null,
     *     targets?: CisTargets|null,
     *     scheduledBy?: string|null,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
