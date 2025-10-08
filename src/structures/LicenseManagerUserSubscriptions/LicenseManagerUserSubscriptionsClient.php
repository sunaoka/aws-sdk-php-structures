<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions;

class LicenseManagerUserSubscriptionsClient extends \Aws\LicenseManagerUserSubscriptions\LicenseManagerUserSubscriptionsClient
{
    use AssociateUser\AssociateUserTrait;
    use CreateLicenseServerEndpoint\CreateLicenseServerEndpointTrait;
    use DeleteLicenseServerEndpoint\DeleteLicenseServerEndpointTrait;
    use DeregisterIdentityProvider\DeregisterIdentityProviderTrait;
    use DisassociateUser\DisassociateUserTrait;
    use ListIdentityProviders\ListIdentityProvidersTrait;
    use ListInstances\ListInstancesTrait;
    use ListLicenseServerEndpoints\ListLicenseServerEndpointsTrait;
    use ListProductSubscriptions\ListProductSubscriptionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListUserAssociations\ListUserAssociationsTrait;
    use RegisterIdentityProvider\RegisterIdentityProviderTrait;
    use StartProductSubscription\StartProductSubscriptionTrait;
    use StopProductSubscription\StopProductSubscriptionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateIdentityProviderSettings\UpdateIdentityProviderSettingsTrait;
}
