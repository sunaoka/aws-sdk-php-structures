<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetRegisteredSubscriptionProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LastSuccessfulDataRetrievalTime
 * @property string|null $SecretArn
 * @property string|null $SubscriptionProviderArn
 * @property 'RedHat'|null $SubscriptionProviderSource
 * @property 'ACTIVE'|'INVALID'|'PENDING'|null $SubscriptionProviderStatus
 * @property string|null $SubscriptionProviderStatusMessage
 */
class GetRegisteredSubscriptionProviderResponse extends Response
{
}
