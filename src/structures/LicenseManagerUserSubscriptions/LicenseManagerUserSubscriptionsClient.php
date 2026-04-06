<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions;

class LicenseManagerUserSubscriptionsClient extends \Aws\LicenseManagerUserSubscriptions\LicenseManagerUserSubscriptionsClient
{
    use AssociateUser\AssociateUserTrait;
    use DeregisterIdentityProvider\DeregisterIdentityProviderTrait;
    use DisassociateUser\DisassociateUserTrait;
    use ListIdentityProviders\ListIdentityProvidersTrait;
    use ListInstances\ListInstancesTrait;
    use ListProductSubscriptions\ListProductSubscriptionsTrait;
    use ListUserAssociations\ListUserAssociationsTrait;
    use RegisterIdentityProvider\RegisterIdentityProviderTrait;
    use StartProductSubscription\StartProductSubscriptionTrait;
    use StopProductSubscription\StopProductSubscriptionTrait;
    use UpdateIdentityProviderSettings\UpdateIdentityProviderSettingsTrait;
}
