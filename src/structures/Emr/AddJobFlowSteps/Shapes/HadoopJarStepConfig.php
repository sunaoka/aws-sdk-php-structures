<?php

namespace Sunaoka\Aws\Structures\Emr\AddJobFlowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KeyValue> $Properties
 * @property string $Jar
 * @property string $MainClass
 * @property list<string> $Args
 */
class HadoopJarStepConfig extends Shape
{
    /**
     * @param array{
     *     Properties?: list<KeyValue>,
     *     Jar: string,
     *     MainClass?: string,
     *     Args?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
