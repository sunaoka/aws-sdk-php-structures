<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property StepAction $action
 */
class Step extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     action: StepAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
