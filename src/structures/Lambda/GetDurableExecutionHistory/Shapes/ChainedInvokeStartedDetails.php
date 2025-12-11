<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionName
 * @property string|null $TenantId
 * @property EventInput|null $Input
 * @property string|null $ExecutedVersion
 * @property string|null $DurableExecutionArn
 */
class ChainedInvokeStartedDetails extends Shape
{
    /**
     * @param array{
     *     FunctionName: string,
     *     TenantId?: string|null,
     *     Input?: EventInput|null,
     *     ExecutedVersion?: string|null,
     *     DurableExecutionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
