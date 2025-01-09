<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxCountPerRecipient
 * @property int $frequency
 * @property 'DAY' $unit
 */
class CommunicationLimit extends Shape
{
    /**
     * @param array{
     *     maxCountPerRecipient: int,
     *     frequency: int,
     *     unit: 'DAY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
