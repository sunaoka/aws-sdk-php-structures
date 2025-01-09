<?php

namespace Sunaoka\Aws\Structures\Sns\GetSubscriptionAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubscriptionArn
 */
class GetSubscriptionAttributesRequest extends Request
{
    /**
     * @param array{SubscriptionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
