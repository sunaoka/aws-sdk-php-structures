<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WriteTreatmentResource> $AdditionalTreatments
 * @property CustomDeliveryConfiguration $CustomDeliveryConfiguration
 * @property string $Description
 * @property int $HoldoutPercent
 * @property CampaignHook $Hook
 * @property bool $IsPaused
 * @property CampaignLimits $Limits
 * @property MessageConfiguration $MessageConfiguration
 * @property string $Name
 * @property Schedule $Schedule
 * @property string $SegmentId
 * @property int $SegmentVersion
 * @property array<string, string> $tags
 * @property TemplateConfiguration $TemplateConfiguration
 * @property string $TreatmentDescription
 * @property string $TreatmentName
 * @property int $Priority
 */
class WriteCampaignRequest extends Shape
{
    /**
     * @param array{
     *     AdditionalTreatments?: list<WriteTreatmentResource>,
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration,
     *     Description?: string,
     *     HoldoutPercent?: int,
     *     Hook?: CampaignHook,
     *     IsPaused?: bool,
     *     Limits?: CampaignLimits,
     *     MessageConfiguration?: MessageConfiguration,
     *     Name?: string,
     *     Schedule?: Schedule,
     *     SegmentId?: string,
     *     SegmentVersion?: int,
     *     tags?: array<string, string>,
     *     TemplateConfiguration?: TemplateConfiguration,
     *     TreatmentDescription?: string,
     *     TreatmentName?: string,
     *     Priority?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
