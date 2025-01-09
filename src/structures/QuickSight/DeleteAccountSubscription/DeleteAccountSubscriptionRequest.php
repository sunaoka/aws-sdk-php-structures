<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccountSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 */
class DeleteAccountSubscriptionRequest extends Request
{
    /**
     * @param array{AwsAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
