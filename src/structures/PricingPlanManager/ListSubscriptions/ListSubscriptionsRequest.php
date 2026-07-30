<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\ListSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListSubscriptionsRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
