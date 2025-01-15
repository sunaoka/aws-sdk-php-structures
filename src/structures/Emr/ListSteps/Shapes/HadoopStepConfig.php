<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Jar
 * @property array<string, string>|null $Properties
 * @property string|null $MainClass
 * @property list<string>|null $Args
 */
class HadoopStepConfig extends Shape
{
    /**
     * @param array{
     *     Jar?: string|null,
     *     Properties?: array<string, string>|null,
     *     MainClass?: string|null,
     *     Args?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
