<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteAddonSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddonSubscriptionId
 */
class DeleteAddonSubscriptionRequest extends Request
{
    /**
     * @param array{AddonSubscriptionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
