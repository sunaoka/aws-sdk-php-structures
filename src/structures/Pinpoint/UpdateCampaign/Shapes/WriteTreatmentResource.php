<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDeliveryConfiguration $CustomDeliveryConfiguration
 * @property MessageConfiguration $MessageConfiguration
 * @property Schedule $Schedule
 * @property int $SizePercent
 * @property TemplateConfiguration $TemplateConfiguration
 * @property string $TreatmentDescription
 * @property string $TreatmentName
 */
class WriteTreatmentResource extends Shape
{
    /**
     * @param array{
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration,
     *     MessageConfiguration?: MessageConfiguration,
     *     Schedule?: Schedule,
     *     SizePercent: int,
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
