<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ResourceArns
 * @property 'BREAKPOINT'|'PROBE' $InstrumentationType
 */
class BatchDeleteByResourceArns extends Shape
{
    /**
     * @param array{
     *     ResourceArns: list<string>,
     *     InstrumentationType: 'BREAKPOINT'|'PROBE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
