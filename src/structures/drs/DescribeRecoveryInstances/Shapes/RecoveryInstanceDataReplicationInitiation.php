<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $startDateTime
 * @property list<RecoveryInstanceDataReplicationInitiationStep>|null $steps
 */
class RecoveryInstanceDataReplicationInitiation extends Shape
{
    /**
     * @param array{
     *     startDateTime?: string|null,
     *     steps?: list<RecoveryInstanceDataReplicationInitiationStep>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
