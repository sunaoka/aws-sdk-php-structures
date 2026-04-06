<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'INT'|'FLOAT'|'STRING'|'PATH'|'CHUNK_INT' $type
 * @property StepParameterChunks|null $chunks
 */
class StepParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'INT'|'FLOAT'|'STRING'|'PATH'|'CHUNK_INT',
     *     chunks?: StepParameterChunks|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
