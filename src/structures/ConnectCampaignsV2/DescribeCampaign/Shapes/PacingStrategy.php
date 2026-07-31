<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AbandonmentRatePacingConfig|null $abandonmentRate
 */
class PacingStrategy extends Shape
{
    /**
     * @param array{abandonmentRate?: AbandonmentRatePacingConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
