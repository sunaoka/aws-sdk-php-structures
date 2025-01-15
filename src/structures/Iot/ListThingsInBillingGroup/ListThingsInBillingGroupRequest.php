<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingsInBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListThingsInBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
