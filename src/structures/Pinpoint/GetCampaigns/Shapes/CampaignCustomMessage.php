<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Data
 */
class CampaignCustomMessage extends Shape
{
    /**
     * @param array{Data?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
