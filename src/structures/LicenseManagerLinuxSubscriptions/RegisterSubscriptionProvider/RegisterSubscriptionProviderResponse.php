<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\RegisterSubscriptionProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SubscriptionProviderArn
 * @property 'RedHat'|null $SubscriptionProviderSource
 * @property 'ACTIVE'|'INVALID'|'PENDING'|null $SubscriptionProviderStatus
 */
class RegisterSubscriptionProviderResponse extends Response
{
}
