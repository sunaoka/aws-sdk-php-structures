<?php

namespace Sunaoka\Aws\Structures\FIS\CreateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $path
 * @property list<string>|null $values
 */
class ExperimentTemplateTargetFilter extends Shape
{
    /**
     * @param array{
     *     path?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
