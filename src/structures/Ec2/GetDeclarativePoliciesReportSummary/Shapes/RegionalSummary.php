<?php

namespace Sunaoka\Aws\Structures\Ec2\GetDeclarativePoliciesReportSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property int|null $NumberOfMatchedAccounts
 * @property int|null $NumberOfUnmatchedAccounts
 */
class RegionalSummary extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     NumberOfMatchedAccounts?: int|null,
     *     NumberOfUnmatchedAccounts?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
