<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ThresholdPercentage
 * @property int $ProposalDurationInHours
 * @property 'GREATER_THAN'|'GREATER_THAN_OR_EQUAL_TO' $ThresholdComparator
 */
class ApprovalThresholdPolicy extends Shape
{
    /**
     * @param array{
     *     ThresholdPercentage?: int,
     *     ProposalDurationInHours?: int,
     *     ThresholdComparator?: 'GREATER_THAN'|'GREATER_THAN_OR_EQUAL_TO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
