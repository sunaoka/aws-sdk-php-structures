<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WriteTreatmentResource>|null $AdditionalTreatments
 * @property CustomDeliveryConfiguration|null $CustomDeliveryConfiguration
 * @property string|null $Description
 * @property int|null $HoldoutPercent
 * @property CampaignHook|null $Hook
 * @property bool|null $IsPaused
 * @property CampaignLimits|null $Limits
 * @property MessageConfiguration|null $MessageConfiguration
 * @property string|null $Name
 * @property Schedule|null $Schedule
 * @property string|null $SegmentId
 * @property int|null $SegmentVersion
 * @property array<string, string>|null $tags
 * @property TemplateConfiguration|null $TemplateConfiguration
 * @property string|null $TreatmentDescription
 * @property string|null $TreatmentName
 * @property int|null $Priority
 */
class WriteCampaignRequest extends Shape
{
    /**
     * @param array{
     *     AdditionalTreatments?: list<WriteTreatmentResource>|null,
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration|null,
     *     Description?: string|null,
     *     HoldoutPercent?: int|null,
     *     Hook?: CampaignHook|null,
     *     IsPaused?: bool|null,
     *     Limits?: CampaignLimits|null,
     *     MessageConfiguration?: MessageConfiguration|null,
     *     Name?: string|null,
     *     Schedule?: Schedule|null,
     *     SegmentId?: string|null,
     *     SegmentVersion?: int|null,
     *     tags?: array<string, string>|null,
     *     TemplateConfiguration?: TemplateConfiguration|null,
     *     TreatmentDescription?: string|null,
     *     TreatmentName?: string|null,
     *     Priority?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
