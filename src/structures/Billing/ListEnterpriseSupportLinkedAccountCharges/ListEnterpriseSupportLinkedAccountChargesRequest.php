<?php

namespace Sunaoka\Aws\Structures\Billing\ListEnterpriseSupportLinkedAccountCharges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billingMonth
 * @property string|null $accountId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListEnterpriseSupportLinkedAccountChargesRequest extends Request
{
    /**
     * @param array{
     *     billingMonth: string,
     *     accountId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
