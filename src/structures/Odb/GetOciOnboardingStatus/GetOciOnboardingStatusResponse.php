<?php

namespace Sunaoka\Aws\Structures\Odb\GetOciOnboardingStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'NOT_STARTED'|'PENDING_LINK_GENERATION'|'PENDING_CUSTOMER_ACTION'|'PENDING_INITIALIZATION'|'ACTIVATING'|'ACTIVE_IN_HOME_REGION'|'ACTIVE'|'ACTIVE_LIMITED'|'FAILED'|'PUBLIC_OFFER_UNSUPPORTED'|'SUSPENDED'|'CANCELED'|null $status
 * @property string|null $existingTenancyActivationLink
 * @property string|null $newTenancyActivationLink
 */
class GetOciOnboardingStatusResponse extends Response
{
}
