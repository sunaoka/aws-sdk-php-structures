<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maxCountPerRecipient
 * @property int<1, 30> $frequency
 * @property 'DAY' $unit
 */
class CommunicationLimit extends Shape
{
    /**
     * @param array{
     *     maxCountPerRecipient: int<1, max>,
     *     frequency: int<1, 30>,
     *     unit: 'DAY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
