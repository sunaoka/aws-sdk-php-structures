<?php

namespace Sunaoka\Aws\Structures\Payments\GetAccountBalance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'INVOICES_DUE'|'INVOICES_PAST_DUE'|'OUTSTANDING_CREDIT_MEMOS' $balanceType
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class GetAccountBalanceRequest extends Request
{
    /**
     * @param array{
     *     balanceType: 'INVOICES_DUE'|'INVOICES_PAST_DUE'|'OUTSTANDING_CREDIT_MEMOS',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
