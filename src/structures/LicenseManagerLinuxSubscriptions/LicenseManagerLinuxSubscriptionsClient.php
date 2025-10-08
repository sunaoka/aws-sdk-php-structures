<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions;

class LicenseManagerLinuxSubscriptionsClient extends \Aws\LicenseManagerLinuxSubscriptions\LicenseManagerLinuxSubscriptionsClient
{
    use DeregisterSubscriptionProvider\DeregisterSubscriptionProviderTrait;
    use GetRegisteredSubscriptionProvider\GetRegisteredSubscriptionProviderTrait;
    use GetServiceSettings\GetServiceSettingsTrait;
    use ListLinuxSubscriptionInstances\ListLinuxSubscriptionInstancesTrait;
    use ListLinuxSubscriptions\ListLinuxSubscriptionsTrait;
    use ListRegisteredSubscriptionProviders\ListRegisteredSubscriptionProvidersTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterSubscriptionProvider\RegisterSubscriptionProviderTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateServiceSettings\UpdateServiceSettingsTrait;
}
