<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventDimensions $Dimensions
 * @property 'SYSTEM'|'ENDPOINT' $FilterType
 */
class CampaignEventFilter extends Shape
{
    /**
     * @param array{
     *     Dimensions: EventDimensions,
     *     FilterType: 'SYSTEM'|'ENDPOINT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
