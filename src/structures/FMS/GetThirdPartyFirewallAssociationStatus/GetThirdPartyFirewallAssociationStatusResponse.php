<?php

namespace Sunaoka\Aws\Structures\FMS\GetThirdPartyFirewallAssociationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ONBOARDING'|'ONBOARD_COMPLETE'|'OFFBOARDING'|'OFFBOARD_COMPLETE'|'NOT_EXIST'|null $ThirdPartyFirewallStatus
 * @property 'NO_SUBSCRIPTION'|'NOT_COMPLETE'|'COMPLETE'|null $MarketplaceOnboardingStatus
 */
class GetThirdPartyFirewallAssociationStatusResponse extends Response
{
}
