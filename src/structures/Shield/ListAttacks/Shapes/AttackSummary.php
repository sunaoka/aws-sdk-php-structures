<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttackId
 * @property string $ResourceArn
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<AttackVectorDescription> $AttackVectors
 */
class AttackSummary extends Shape
{
    /**
     * @param array{
     *     AttackId?: string,
     *     ResourceArn?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     AttackVectors?: list<AttackVectorDescription>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
