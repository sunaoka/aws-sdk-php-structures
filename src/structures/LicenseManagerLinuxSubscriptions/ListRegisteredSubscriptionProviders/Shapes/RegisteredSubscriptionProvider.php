<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListRegisteredSubscriptionProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastSuccessfulDataRetrievalTime
 * @property string $SecretArn
 * @property string $SubscriptionProviderArn
 * @property 'RedHat' $SubscriptionProviderSource
 * @property 'ACTIVE'|'INVALID'|'PENDING' $SubscriptionProviderStatus
 * @property string $SubscriptionProviderStatusMessage
 */
class RegisteredSubscriptionProvider extends Shape
{
    /**
     * @param array{
     *     LastSuccessfulDataRetrievalTime?: string,
     *     SecretArn?: string,
     *     SubscriptionProviderArn?: string,
     *     SubscriptionProviderSource?: 'RedHat',
     *     SubscriptionProviderStatus?: 'ACTIVE'|'INVALID'|'PENDING',
     *     SubscriptionProviderStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
