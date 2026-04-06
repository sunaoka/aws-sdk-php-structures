<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $startDate
 * @property string $endDate
 */
class RestrictedPeriod extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     startDate: string,
     *     endDate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
