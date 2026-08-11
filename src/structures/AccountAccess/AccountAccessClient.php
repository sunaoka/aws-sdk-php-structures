<?php

namespace Sunaoka\Aws\Structures\AccountAccess;

class AccountAccessClient extends \Aws\AccountAccess\AccountAccessClient
{
    use CreateApplication\CreateApplicationTrait;
    use CreateEntitlement\CreateEntitlementTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteEntitlement\DeleteEntitlementTrait;
    use GetApplication\GetApplicationTrait;
    use GetEntitlement\GetEntitlementTrait;
    use ListApplications\ListApplicationsTrait;
    use ListEntitlements\ListEntitlementsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
