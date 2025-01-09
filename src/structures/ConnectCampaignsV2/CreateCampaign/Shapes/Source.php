<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customerProfilesSegmentArn
 * @property EventTrigger $eventTrigger
 */
class Source extends Shape
{
    /**
     * @param array{
     *     customerProfilesSegmentArn?: string,
     *     eventTrigger?: EventTrigger
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
