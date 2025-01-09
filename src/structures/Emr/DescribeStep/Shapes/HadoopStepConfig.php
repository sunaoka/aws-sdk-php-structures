<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Jar
 * @property array<string, string> $Properties
 * @property string $MainClass
 * @property list<string> $Args
 */
class HadoopStepConfig extends Shape
{
    /**
     * @param array{
     *     Jar?: string,
     *     Properties?: array<string, string>,
     *     MainClass?: string,
     *     Args?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
