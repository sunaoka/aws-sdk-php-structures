<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectCampaignArn
 * @property string|null $ConnectCampaignExecutionRoleArn
 */
class JourneyChannelSettings extends Shape
{
    /**
     * @param array{
     *     ConnectCampaignArn?: string|null,
     *     ConnectCampaignExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
