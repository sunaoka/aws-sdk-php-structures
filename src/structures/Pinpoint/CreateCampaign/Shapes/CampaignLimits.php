<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Daily
 * @property int $MaximumDuration
 * @property int $MessagesPerSecond
 * @property int $Total
 * @property int $Session
 */
class CampaignLimits extends Shape
{
    /**
     * @param array{
     *     Daily?: int,
     *     MaximumDuration?: int,
     *     MessagesPerSecond?: int,
     *     Total?: int,
     *     Session?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
