<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttackId
 * @property string $ResourceArn
 * @property list<SubResourceSummary> $SubResources
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<SummarizedCounter> $AttackCounters
 * @property list<AttackProperty> $AttackProperties
 * @property list<Mitigation> $Mitigations
 */
class AttackDetail extends Shape
{
    /**
     * @param array{
     *     AttackId?: string,
     *     ResourceArn?: string,
     *     SubResources?: list<SubResourceSummary>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     AttackCounters?: list<SummarizedCounter>,
     *     AttackProperties?: list<AttackProperty>,
     *     Mitigations?: list<Mitigation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
