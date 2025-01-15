<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDeliveryConfiguration|null $CustomDeliveryConfiguration
 * @property string $Id
 * @property MessageConfiguration|null $MessageConfiguration
 * @property Schedule|null $Schedule
 * @property int $SizePercent
 * @property CampaignState|null $State
 * @property TemplateConfiguration|null $TemplateConfiguration
 * @property string|null $TreatmentDescription
 * @property string|null $TreatmentName
 */
class TreatmentResource extends Shape
{
    /**
     * @param array{
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration|null,
     *     Id: string,
     *     MessageConfiguration?: MessageConfiguration|null,
     *     Schedule?: Schedule|null,
     *     SizePercent: int,
     *     State?: CampaignState|null,
     *     TemplateConfiguration?: TemplateConfiguration|null,
     *     TreatmentDescription?: string|null,
     *     TreatmentName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
