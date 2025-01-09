<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startDateTime
 * @property list<RecoveryInstanceDataReplicationInitiationStep> $steps
 */
class RecoveryInstanceDataReplicationInitiation extends Shape
{
    /**
     * @param array{
     *     startDateTime?: string,
     *     steps?: list<RecoveryInstanceDataReplicationInitiationStep>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
