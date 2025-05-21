<?php

namespace Sunaoka\Aws\Structures\QBusiness\CancelSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $subscriptionArn
 * @property Shapes\SubscriptionDetails|null $currentSubscription
 * @property Shapes\SubscriptionDetails|null $nextSubscription
 */
class CancelSubscriptionResponse extends Response
{
}
