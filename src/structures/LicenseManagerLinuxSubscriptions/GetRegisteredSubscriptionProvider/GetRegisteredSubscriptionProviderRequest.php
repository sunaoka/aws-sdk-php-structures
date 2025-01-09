<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetRegisteredSubscriptionProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionProviderArn
 */
class GetRegisteredSubscriptionProviderRequest extends Request
{
    /**
     * @param array{SubscriptionProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
