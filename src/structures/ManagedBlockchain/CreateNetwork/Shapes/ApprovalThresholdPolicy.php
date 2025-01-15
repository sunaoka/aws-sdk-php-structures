<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $ThresholdPercentage
 * @property int<1, 168>|null $ProposalDurationInHours
 * @property 'GREATER_THAN'|'GREATER_THAN_OR_EQUAL_TO'|null $ThresholdComparator
 */
class ApprovalThresholdPolicy extends Shape
{
    /**
     * @param array{
     *     ThresholdPercentage?: int<0, 100>|null,
     *     ProposalDurationInHours?: int<1, 168>|null,
     *     ThresholdComparator?: 'GREATER_THAN'|'GREATER_THAN_OR_EQUAL_TO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
