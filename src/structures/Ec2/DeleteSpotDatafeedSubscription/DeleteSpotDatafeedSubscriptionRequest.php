<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSpotDatafeedSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 */
class DeleteSpotDatafeedSubscriptionRequest extends Request
{
    /**
     * @param array{DryRun?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
