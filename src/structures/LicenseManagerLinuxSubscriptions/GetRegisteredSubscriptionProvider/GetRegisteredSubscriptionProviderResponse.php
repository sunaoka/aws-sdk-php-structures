<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetRegisteredSubscriptionProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LastSuccessfulDataRetrievalTime
 * @property string $SecretArn
 * @property string $SubscriptionProviderArn
 * @property 'RedHat' $SubscriptionProviderSource
 * @property 'ACTIVE'|'INVALID'|'PENDING' $SubscriptionProviderStatus
 * @property string $SubscriptionProviderStatusMessage
 */
class GetRegisteredSubscriptionProviderResponse extends Response
{
}
