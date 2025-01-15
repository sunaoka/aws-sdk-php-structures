<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MERGE'|'FAILOVER'|null $FailoverMode
 * @property int|null $RecoveryWindow
 * @property SourcePriority|null $SourcePriority
 * @property 'ENABLED'|'DISABLED'|null $State
 */
class FailoverConfig extends Shape
{
    /**
     * @param array{
     *     FailoverMode?: 'MERGE'|'FAILOVER'|null,
     *     RecoveryWindow?: int|null,
     *     SourcePriority?: SourcePriority|null,
     *     State?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
