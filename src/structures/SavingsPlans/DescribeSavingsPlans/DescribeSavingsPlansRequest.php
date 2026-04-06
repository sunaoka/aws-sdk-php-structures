<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $savingsPlanArns
 * @property list<string>|null $savingsPlanIds
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property list<'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned'>|null $states
 * @property list<Shapes\SavingsPlanFilter>|null $filters
 */
class DescribeSavingsPlansRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanArns?: list<string>|null,
     *     savingsPlanIds?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     states?: list<'payment-pending'|'payment-failed'|'active'|'retired'|'queued'|'queued-deleted'|'pending-return'|'returned'>|null,
     *     filters?: list<Shapes\SavingsPlanFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
