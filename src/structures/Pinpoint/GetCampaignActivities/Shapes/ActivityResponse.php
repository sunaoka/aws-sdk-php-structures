<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property string $End
 * @property string $Id
 * @property string $Result
 * @property string $ScheduledStart
 * @property string $Start
 * @property string $State
 * @property int $SuccessfulEndpointCount
 * @property int $TimezonesCompletedCount
 * @property int $TimezonesTotalCount
 * @property int $TotalEndpointCount
 * @property string $TreatmentId
 * @property array<string, string> $ExecutionMetrics
 */
class ActivityResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     End?: string,
     *     Id: string,
     *     Result?: string,
     *     ScheduledStart?: string,
     *     Start?: string,
     *     State?: string,
     *     SuccessfulEndpointCount?: int,
     *     TimezonesCompletedCount?: int,
     *     TimezonesTotalCount?: int,
     *     TotalEndpointCount?: int,
     *     TreatmentId?: string,
     *     ExecutionMetrics?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
