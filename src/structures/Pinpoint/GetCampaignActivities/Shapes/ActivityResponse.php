<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property string|null $End
 * @property string $Id
 * @property string|null $Result
 * @property string|null $ScheduledStart
 * @property string|null $Start
 * @property string|null $State
 * @property int|null $SuccessfulEndpointCount
 * @property int|null $TimezonesCompletedCount
 * @property int|null $TimezonesTotalCount
 * @property int|null $TotalEndpointCount
 * @property string|null $TreatmentId
 * @property array<string, string>|null $ExecutionMetrics
 */
class ActivityResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     End?: string|null,
     *     Id: string,
     *     Result?: string|null,
     *     ScheduledStart?: string|null,
     *     Start?: string|null,
     *     State?: string|null,
     *     SuccessfulEndpointCount?: int|null,
     *     TimezonesCompletedCount?: int|null,
     *     TimezonesTotalCount?: int|null,
     *     TotalEndpointCount?: int|null,
     *     TreatmentId?: string|null,
     *     ExecutionMetrics?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
