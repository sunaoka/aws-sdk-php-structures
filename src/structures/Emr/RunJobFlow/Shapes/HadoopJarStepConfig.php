<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<KeyValue>|null $Properties
 * @property string $Jar
 * @property string|null $MainClass
 * @property list<string>|null $Args
 */
class HadoopJarStepConfig extends Shape
{
    /**
     * @param array{
     *     Properties?: list<KeyValue>|null,
     *     Jar: string,
     *     MainClass?: string|null,
     *     Args?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
