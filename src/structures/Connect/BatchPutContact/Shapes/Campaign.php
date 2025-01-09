<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignId
 */
class Campaign extends Shape
{
    /**
     * @param array{CampaignId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
