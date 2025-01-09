<?php

namespace Sunaoka\Aws\Structures\FIS\GetExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property list<string> $values
 */
class ExperimentTemplateTargetFilter extends Shape
{
    /**
     * @param array{
     *     path?: string,
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
