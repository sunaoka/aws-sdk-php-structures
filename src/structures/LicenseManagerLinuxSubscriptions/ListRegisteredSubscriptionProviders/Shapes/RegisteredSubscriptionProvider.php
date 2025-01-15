<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\ListRegisteredSubscriptionProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LastSuccessfulDataRetrievalTime
 * @property string|null $SecretArn
 * @property string|null $SubscriptionProviderArn
 * @property 'RedHat'|null $SubscriptionProviderSource
 * @property 'ACTIVE'|'INVALID'|'PENDING'|null $SubscriptionProviderStatus
 * @property string|null $SubscriptionProviderStatusMessage
 */
class RegisteredSubscriptionProvider extends Shape
{
    /**
     * @param array{
     *     LastSuccessfulDataRetrievalTime?: string|null,
     *     SecretArn?: string|null,
     *     SubscriptionProviderArn?: string|null,
     *     SubscriptionProviderSource?: 'RedHat'|null,
     *     SubscriptionProviderStatus?: 'ACTIVE'|'INVALID'|'PENDING'|null,
     *     SubscriptionProviderStatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
