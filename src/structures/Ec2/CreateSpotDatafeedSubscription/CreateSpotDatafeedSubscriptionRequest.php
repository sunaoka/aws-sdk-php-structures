<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSpotDatafeedSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property bool|null $DryRun
 * @property string|null $Prefix
 */
class CreateSpotDatafeedSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     DryRun?: bool|null,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
