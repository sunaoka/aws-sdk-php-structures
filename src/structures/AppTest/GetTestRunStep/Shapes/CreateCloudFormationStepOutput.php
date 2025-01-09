<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stackId
 * @property array<string, string> $exports
 */
class CreateCloudFormationStepOutput extends Shape
{
    /**
     * @param array{
     *     stackId: string,
     *     exports?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
