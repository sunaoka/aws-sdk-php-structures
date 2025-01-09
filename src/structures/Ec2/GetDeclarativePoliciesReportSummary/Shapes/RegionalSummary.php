<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RegionName
 * @property int $NumberOfMatchedAccounts
 * @property int $NumberOfUnmatchedAccounts
 */
class RegionalSummary extends Shape
{
    /**
     * @param array{
     *     RegionName?: string,
     *     NumberOfMatchedAccounts?: int,
     *     NumberOfUnmatchedAccounts?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
