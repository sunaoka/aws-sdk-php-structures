<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class EvaluationFormAutoEvaluationConfiguration extends Shape
{
    /**
     * @param array{Enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
