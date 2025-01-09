<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDeliveryConfiguration $CustomDeliveryConfiguration
 * @property string $Id
 * @property MessageConfiguration $MessageConfiguration
 * @property Schedule $Schedule
 * @property int $SizePercent
 * @property CampaignState $State
 * @property TemplateConfiguration $TemplateConfiguration
 * @property string $TreatmentDescription
 * @property string $TreatmentName
 */
class TreatmentResource extends Shape
{
    /**
     * @param array{
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration,
     *     Id: string,
     *     MessageConfiguration?: MessageConfiguration,
     *     Schedule?: Schedule,
     *     SizePercent: int,
     *     State?: CampaignState,
     *     TemplateConfiguration?: TemplateConfiguration,
     *     TreatmentDescription?: string,
     *     TreatmentName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
