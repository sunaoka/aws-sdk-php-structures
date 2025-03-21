<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDeliveryConfiguration|null $CustomDeliveryConfiguration
 * @property MessageConfiguration|null $MessageConfiguration
 * @property Schedule|null $Schedule
 * @property int $SizePercent
 * @property TemplateConfiguration|null $TemplateConfiguration
 * @property string|null $TreatmentDescription
 * @property string|null $TreatmentName
 */
class WriteTreatmentResource extends Shape
{
    /**
     * @param array{
     *     CustomDeliveryConfiguration?: CustomDeliveryConfiguration|null,
     *     MessageConfiguration?: MessageConfiguration|null,
     *     Schedule?: Schedule|null,
     *     SizePercent: int,
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
