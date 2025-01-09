<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectCampaignArn
 * @property string $ConnectCampaignExecutionRoleArn
 */
class JourneyChannelSettings extends Shape
{
    /**
     * @param array{
     *     ConnectCampaignArn?: string,
     *     ConnectCampaignExecutionRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
