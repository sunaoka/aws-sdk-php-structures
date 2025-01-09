<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stackId
 */
class DeleteCloudFormationStepInput extends Shape
{
    /**
     * @param array{stackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
