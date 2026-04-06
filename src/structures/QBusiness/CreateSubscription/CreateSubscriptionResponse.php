<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $subscriptionId
 * @property string|null $subscriptionArn
 * @property Shapes\SubscriptionDetails|null $currentSubscription
 * @property Shapes\SubscriptionDetails|null $nextSubscription
 */
class CreateSubscriptionResponse extends Response
{
}
