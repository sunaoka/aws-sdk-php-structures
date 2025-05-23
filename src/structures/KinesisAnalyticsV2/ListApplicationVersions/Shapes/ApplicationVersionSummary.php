<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplicationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 999999999> $ApplicationVersionId
 * @property 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK' $ApplicationStatus
 */
class ApplicationVersionSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationVersionId: int<1, 999999999>,
     *     ApplicationStatus: 'DELETING'|'STARTING'|'STOPPING'|'READY'|'RUNNING'|'UPDATING'|'AUTOSCALING'|'FORCE_STOPPING'|'ROLLING_BACK'|'MAINTENANCE'|'ROLLED_BACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
