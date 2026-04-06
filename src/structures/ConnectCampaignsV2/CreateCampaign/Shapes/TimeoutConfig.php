<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 300> $durationInSeconds
 */
class TimeoutConfig extends Shape
{
    /**
     * @param array{durationInSeconds: int<1, 300>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
