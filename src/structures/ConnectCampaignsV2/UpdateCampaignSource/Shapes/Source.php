<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customerProfilesSegmentArn
 * @property EventTrigger|null $eventTrigger
 */
class Source extends Shape
{
    /**
     * @param array{
     *     customerProfilesSegmentArn?: string|null,
     *     eventTrigger?: EventTrigger|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
