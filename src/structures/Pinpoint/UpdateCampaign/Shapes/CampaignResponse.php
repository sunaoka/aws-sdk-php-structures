<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TreatmentResource> $AdditionalTreatments
 * @property string $ApplicationId
 * @property string $Arn
 * @property string $CreationDate
 * @property CustomDeliveryConfiguration $CustomDeliveryConfiguration
 * @property CampaignState $DefaultState
 * @property string $Description
 * @property int $HoldoutPercent
 * @property CampaignHook $Hook
 * @property string $Id
 * @property bool $IsPaused
 * @property string $LastModifiedDate
 * @property CampaignLimits $Limits
 * @property MessageConfiguration $MessageConfiguration
 * @property string $Name
 * @property Schedule $Schedule
 * @property string $SegmentId
 * @property int $SegmentVersion
 * @property CampaignState $State
 * @property array<string, string> $tags
 * @property TemplateConfiguration $TemplateConfiguration
 * @property string $TreatmentDescription
 * @property string $TreatmentName
 * @property int $Version
 * @property int $Priority
 */
class CampaignResponse extends Shape
{
    /**
     * @param array{
     *     AdditionalTreatments?: list<TreatmentResource>,
     *     ApplicationId: string,
     *     Arn: string,
     *     CreationDate: string,
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration,
     *     DefaultState?: CampaignState,
     *     Description?: string,
     *     HoldoutPercent?: int,
     *     Hook?: CampaignHook,
     *     Id: string,
     *     IsPaused?: bool,
     *     LastModifiedDate: string,
     *     Limits?: CampaignLimits,
     *     MessageConfiguration?: MessageConfiguration,
     *     Name?: string,
     *     Schedule?: Schedule,
     *     SegmentId: string,
     *     SegmentVersion: int,
     *     State?: CampaignState,
     *     tags?: array<string, string>,
     *     TemplateConfiguration?: TemplateConfiguration,
     *     TreatmentDescription?: string,
     *     TreatmentName?: string,
     *     Version?: int,
     *     Priority?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
