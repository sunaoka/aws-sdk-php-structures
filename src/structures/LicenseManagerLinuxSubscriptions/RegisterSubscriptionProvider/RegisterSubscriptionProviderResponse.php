<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\RegisterSubscriptionProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SubscriptionProviderArn
 * @property 'RedHat' $SubscriptionProviderSource
 * @property 'ACTIVE'|'INVALID'|'PENDING' $SubscriptionProviderStatus
 */
class RegisterSubscriptionProviderResponse extends Response
{
}
