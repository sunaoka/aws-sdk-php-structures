<?php

namespace Sunaoka\Aws\Structures\Billing\GetCreditAllocationHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CreditAllocationHistoryEntry>|null $creditAllocationHistoryList
 * @property bool $partialResults
 * @property list<string>|null $failedMonths
 * @property string|null $nextToken
 */
class GetCreditAllocationHistoryResponse extends Response
{
}
