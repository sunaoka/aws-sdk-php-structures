<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'INT'|'FLOAT'|'STRING'|'PATH' $type
 */
class StepParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'INT'|'FLOAT'|'STRING'|'PATH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
