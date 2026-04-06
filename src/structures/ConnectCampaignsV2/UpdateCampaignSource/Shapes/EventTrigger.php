<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customerProfilesDomainArn
 */
class EventTrigger extends Shape
{
    /**
     * @param array{customerProfilesDomainArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
