<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TreatmentResource>|null $AdditionalTreatments
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreationDate
 * @property CustomDeliveryConfiguration|null $CustomDeliveryConfiguration
 * @property CampaignState|null $DefaultState
 * @property string|null $Description
 * @property int|null $HoldoutPercent
 * @property CampaignHook|null $Hook
 * @property string $Id
 * @property bool|null $IsPaused
 * @property string $LastModifiedDate
 * @property CampaignLimits|null $Limits
 * @property MessageConfiguration|null $MessageConfiguration
 * @property string|null $Name
 * @property Schedule|null $Schedule
 * @property string $SegmentId
 * @property int $SegmentVersion
 * @property CampaignState|null $State
 * @property array<string, string>|null $tags
 * @property TemplateConfiguration|null $TemplateConfiguration
 * @property string|null $TreatmentDescription
 * @property string|null $TreatmentName
 * @property int|null $Version
 * @property int|null $Priority
 */
class CampaignResponse extends Shape
{
    /**
     * @param array{
     *     AdditionalTreatments?: list<TreatmentResource>|null,
     *     ApplicationId: string,
     *     Arn: string,
     *     CreationDate: string,
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration|null,
     *     DefaultState?: CampaignState|null,
     *     Description?: string|null,
     *     HoldoutPercent?: int|null,
     *     Hook?: CampaignHook|null,
     *     Id: string,
     *     IsPaused?: bool|null,
     *     LastModifiedDate: string,
     *     Limits?: CampaignLimits|null,
     *     MessageConfiguration?: MessageConfiguration|null,
     *     Name?: string|null,
     *     Schedule?: Schedule|null,
     *     SegmentId: string,
     *     SegmentVersion: int,
     *     State?: CampaignState|null,
     *     tags?: array<string, string>|null,
     *     TemplateConfiguration?: TemplateConfiguration|null,
     *     TreatmentDescription?: string|null,
     *     TreatmentName?: string|null,
     *     Version?: int|null,
     *     Priority?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
