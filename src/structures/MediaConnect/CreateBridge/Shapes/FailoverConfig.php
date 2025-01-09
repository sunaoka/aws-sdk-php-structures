<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MERGE'|'FAILOVER' $FailoverMode
 * @property int $RecoveryWindow
 * @property SourcePriority $SourcePriority
 * @property 'ENABLED'|'DISABLED' $State
 */
class FailoverConfig extends Shape
{
    /**
     * @param array{
     *     FailoverMode?: 'MERGE'|'FAILOVER',
     *     RecoveryWindow?: int,
     *     SourcePriority?: SourcePriority,
     *     State?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
