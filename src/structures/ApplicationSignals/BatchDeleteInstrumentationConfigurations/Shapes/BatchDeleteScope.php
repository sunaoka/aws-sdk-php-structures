<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Service
 * @property string $Environment
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 */
class BatchDeleteScope extends Shape
{
    /**
     * @param array{
     *     Service: string,
     *     Environment: string,
     *     InstrumentationType: 'BREAKPOINT'|'PROBE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
