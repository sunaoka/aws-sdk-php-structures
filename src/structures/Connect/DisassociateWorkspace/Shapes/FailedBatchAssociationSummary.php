<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailedBatchAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
