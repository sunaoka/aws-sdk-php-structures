<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttackId
 * @property string|null $ResourceArn
 * @property list<SubResourceSummary>|null $SubResources
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<SummarizedCounter>|null $AttackCounters
 * @property list<AttackProperty>|null $AttackProperties
 * @property list<Mitigation>|null $Mitigations
 */
class AttackDetail extends Shape
{
    /**
     * @param array{
     *     AttackId?: string|null,
     *     ResourceArn?: string|null,
     *     SubResources?: list<SubResourceSummary>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     AttackCounters?: list<SummarizedCounter>|null,
     *     AttackProperties?: list<AttackProperty>|null,
     *     Mitigations?: list<Mitigation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
