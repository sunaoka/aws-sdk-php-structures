<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CampaignId
 */
class Campaign extends Shape
{
    /**
     * @param array{CampaignId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
