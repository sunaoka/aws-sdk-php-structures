<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $savingsPlanArns
 * @property list<string> $savingsPlanIds
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 * @property list<'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned'> $states
 * @property list<Shapes\SavingsPlanFilter> $filters
 */
class DescribeSavingsPlansRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanArns?: list<string>,
     *     savingsPlanIds?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>,
     *     states?: list<'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned'>,
     *     filters?: list<Shapes\SavingsPlanFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
