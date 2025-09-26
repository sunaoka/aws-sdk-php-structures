<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActiveTimeRange|null $activeTimeRange
 * @property list<string>|null $arns
 * @property list<'PRIMARY'|'BILLING_GROUP'|'CUSTOM'>|null $billingViewTypes
 * @property string|null $ownerAccountId
 * @property string|null $sourceAccountId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListBillingViewsRequest extends Request
{
    /**
     * @param array{
     *     activeTimeRange?: Shapes\ActiveTimeRange|null,
     *     arns?: list<string>|null,
     *     billingViewTypes?: list<'PRIMARY'|'BILLING_GROUP'|'CUSTOM'>|null,
     *     ownerAccountId?: string|null,
     *     sourceAccountId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
