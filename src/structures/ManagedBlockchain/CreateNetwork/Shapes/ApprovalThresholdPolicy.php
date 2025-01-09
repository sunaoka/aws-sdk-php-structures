<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $ThresholdPercentage
 * @property int<1, 168> $ProposalDurationInHours
 * @property 'GREATER_THAN'|'GREATER_THAN_OR_EQUAL_TO' $ThresholdComparator
 */
class ApprovalThresholdPolicy extends Shape
{
    /**
     * @param array{
     *     ThresholdPercentage?: int<0, 100>,
     *     ProposalDurationInHours?: int<1, 168>,
     *     ThresholdComparator?: 'GREATER_THAN'|'GREATER_THAN_OR_EQUAL_TO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
