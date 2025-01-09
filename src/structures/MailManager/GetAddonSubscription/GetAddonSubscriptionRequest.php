<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddonSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonSubscriptionId
 */
class GetAddonSubscriptionRequest extends Request
{
    /**
     * @param array{AddonSubscriptionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
