<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActiveTimeRange $activeTimeRange
 * @property list<string> $arns
 * @property list<'PRIMARY'|'BILLING_GROUP'|'CUSTOM'> $billingViewTypes
 * @property string $ownerAccountId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListBillingViewsRequest extends Request
{
    /**
     * @param array{
     *     activeTimeRange?: Shapes\ActiveTimeRange,
     *     arns?: list<string>,
     *     billingViewTypes?: list<'PRIMARY'|'BILLING_GROUP'|'CUSTOM'>,
     *     ownerAccountId?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
