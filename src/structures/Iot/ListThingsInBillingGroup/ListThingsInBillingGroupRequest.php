<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingsInBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingGroupName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListThingsInBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     billingGroupName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
