<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ActiveTimeRange|null $activeTimeRange
 * @property list<string>|null $arns
 * @property list<'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|'BILLING_TRANSFER'|'BILLING_TRANSFER_SHOWBACK'>|null $billingViewTypes
 * @property list<Shapes\StringSearch>|null $names
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
     *     billingViewTypes?: list<'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|'BILLING_TRANSFER'|'BILLING_TRANSFER_SHOWBACK'>|null,
     *     names?: list<Shapes\StringSearch>|null,
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
