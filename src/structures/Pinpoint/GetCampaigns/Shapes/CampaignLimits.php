<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Daily
 * @property int|null $MaximumDuration
 * @property int|null $MessagesPerSecond
 * @property int|null $Total
 * @property int|null $Session
 */
class CampaignLimits extends Shape
{
    /**
     * @param array{
     *     Daily?: int|null,
     *     MaximumDuration?: int|null,
     *     MessagesPerSecond?: int|null,
     *     Total?: int|null,
     *     Session?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
