<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property string|null $MostFrequentValue
 * @property int|null $NumberOfMatchedAccounts
 * @property int|null $NumberOfUnmatchedAccounts
 * @property list<RegionalSummary>|null $RegionalSummaries
 */
class AttributeSummary extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     MostFrequentValue?: string|null,
     *     NumberOfMatchedAccounts?: int|null,
     *     NumberOfUnmatchedAccounts?: int|null,
     *     RegionalSummaries?: list<RegionalSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
