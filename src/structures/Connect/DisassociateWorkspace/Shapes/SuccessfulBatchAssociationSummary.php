<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 */
class SuccessfulBatchAssociationSummary extends Shape
{
    /**
     * @param array{ResourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
