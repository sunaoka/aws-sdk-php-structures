<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateEksAnywhereSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property bool $autoRenew
 * @property string $clientRequestToken
 */
class UpdateEksAnywhereSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     autoRenew: bool,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
