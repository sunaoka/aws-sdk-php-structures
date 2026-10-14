<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionName
 * @property string|null $TenantId
 * @property string|null $XAmznTraceId
 */
class ChainedInvokeOptions extends Shape
{
    /**
     * @param array{
     *     FunctionName: string,
     *     TenantId?: string|null,
     *     XAmznTraceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
