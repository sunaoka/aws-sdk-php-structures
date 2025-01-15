<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttackId
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<AttackVectorDescription>|null $AttackVectors
 */
class AttackSummary extends Shape
{
    /**
     * @param array{
     *     AttackId?: string|null,
     *     ResourceArn?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     AttackVectors?: list<AttackVectorDescription>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
