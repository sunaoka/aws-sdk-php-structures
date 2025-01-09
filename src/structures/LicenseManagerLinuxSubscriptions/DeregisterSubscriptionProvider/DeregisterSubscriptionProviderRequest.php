<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\DeregisterSubscriptionProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionProviderArn
 */
class DeregisterSubscriptionProviderRequest extends Request
{
    /**
     * @param array{SubscriptionProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
