<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSpotDatafeedSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $Bucket
 * @property string|null $Prefix
 */
class CreateSpotDatafeedSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Bucket: string,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
