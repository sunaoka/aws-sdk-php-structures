<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSpotDatafeedSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Bucket
 * @property string $Prefix
 */
class CreateSpotDatafeedSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Bucket: string,
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
