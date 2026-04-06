<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nextAttemptDateTime
 * @property string|null $startDateTime
 * @property list<DataReplicationInitiationStep>|null $steps
 */
class DataReplicationInitiation extends Shape
{
    /**
     * @param array{
     *     nextAttemptDateTime?: string|null,
     *     startDateTime?: string|null,
     *     steps?: list<DataReplicationInitiationStep>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
