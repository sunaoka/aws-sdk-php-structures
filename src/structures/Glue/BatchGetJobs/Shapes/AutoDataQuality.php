<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsEnabled
 * @property string|null $EvaluationContext
 */
class AutoDataQuality extends Shape
{
    /**
     * @param array{
     *     IsEnabled?: bool|null,
     *     EvaluationContext?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
