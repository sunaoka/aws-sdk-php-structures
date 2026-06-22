<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $SignalType
 * @property string|null $LocationHash
 */
class BatchDeleteSuccessfulDeletion extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     SignalType?: string|null,
     *     LocationHash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
