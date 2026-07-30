<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager;

class PricingPlanManagerClient extends \Aws\PricingPlanManager\PricingPlanManagerClient
{
    use ApprovePaidSubscription\ApprovePaidSubscriptionTrait;
    use AssociateResourcesToSubscription\AssociateResourcesToSubscriptionTrait;
    use CancelSubscription\CancelSubscriptionTrait;
    use CancelSubscriptionChange\CancelSubscriptionChangeTrait;
    use CreateSubscription\CreateSubscriptionTrait;
    use DisassociateResourcesFromSubscription\DisassociateResourcesFromSubscriptionTrait;
    use GetSubscription\GetSubscriptionTrait;
    use ListSubscriptions\ListSubscriptionsTrait;
    use UpdateSubscription\UpdateSubscriptionTrait;
}
