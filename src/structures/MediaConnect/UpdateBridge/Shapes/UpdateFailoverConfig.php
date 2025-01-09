<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MERGE'|'FAILOVER' $FailoverMode
 * @property int $RecoveryWindow
 * @property SourcePriority $SourcePriority
 * @property 'ENABLED'|'DISABLED' $State
 */
class UpdateFailoverConfig extends Shape
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
