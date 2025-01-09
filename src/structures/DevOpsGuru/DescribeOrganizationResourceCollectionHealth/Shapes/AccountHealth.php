<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeOrganizationResourceCollectionHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property AccountInsightHealth $Insight
 */
class AccountHealth extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Insight?: AccountInsightHealth
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
