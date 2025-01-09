<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $MostFrequentValue
 * @property int $NumberOfMatchedAccounts
 * @property int $NumberOfUnmatchedAccounts
 * @property list<RegionalSummary> $RegionalSummaries
 */
class AttributeSummary extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     MostFrequentValue?: string,
     *     NumberOfMatchedAccounts?: int,
     *     NumberOfUnmatchedAccounts?: int,
     *     RegionalSummaries?: list<RegionalSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
