<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nextAttemptDateTime
 * @property string $startDateTime
 * @property list<DataReplicationInitiationStep> $steps
 */
class DataReplicationInitiation extends Shape
{
    /**
     * @param array{
     *     nextAttemptDateTime?: string,
     *     startDateTime?: string,
     *     steps?: list<DataReplicationInitiationStep>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
