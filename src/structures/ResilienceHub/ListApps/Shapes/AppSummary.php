<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property 'Disabled'|'Daily'|null $assessmentSchedule
 * @property 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|null $complianceStatus
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $description
 * @property 'NotChecked'|'NotDetected'|'Detected'|null $driftStatus
 * @property string $name
 * @property double|null $resiliencyScore
 * @property 'Active'|'Deleting'|null $status
 */
class AppSummary extends Shape
{
    /**
     * @param array{
     *     appArn: string,
     *     assessmentSchedule?: 'Disabled'|'Daily'|null,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotAssessed'|'ChangesDetected'|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     driftStatus?: 'NotChecked'|'NotDetected'|'Detected'|null,
     *     name: string,
     *     resiliencyScore?: double|null,
     *     status?: 'Active'|'Deleting'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
