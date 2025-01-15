<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateExperimentTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string|null $value
 */
class UpdateExperimentTemplateStopConditionInput extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
