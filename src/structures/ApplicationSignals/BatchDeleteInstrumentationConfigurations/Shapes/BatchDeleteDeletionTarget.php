<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BatchDeleteScope|null $Scope
 * @property BatchDeleteByResourceArns|null $ResourceArns
 */
class BatchDeleteDeletionTarget extends Shape
{
    /**
     * @param array{
     *     Scope?: BatchDeleteScope|null,
     *     ResourceArns?: BatchDeleteByResourceArns|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
