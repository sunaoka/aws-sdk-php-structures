<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $failedChecks
 * @property string $scanArn
 * @property string $scanConfigurationArn
 * @property \Aws\Api\DateTimeResult|null $scanDate
 * @property string|null $scanName
 * @property string|null $scheduledBy
 * @property 'LEVEL_1'|'LEVEL_2'|null $securityLevel
 * @property 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS'|null $status
 * @property CisTargets|null $targets
 * @property int|null $totalChecks
 */
class CisScan extends Shape
{
    /**
     * @param array{
     *     failedChecks?: int|null,
     *     scanArn: string,
     *     scanConfigurationArn: string,
     *     scanDate?: \Aws\Api\DateTimeResult|null,
     *     scanName?: string|null,
     *     scheduledBy?: string|null,
     *     securityLevel?: 'LEVEL_1'|'LEVEL_2'|null,
     *     status?: 'FAILED'|'COMPLETED'|'CANCELLED'|'IN_PROGRESS'|null,
     *     targets?: CisTargets|null,
     *     totalChecks?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
