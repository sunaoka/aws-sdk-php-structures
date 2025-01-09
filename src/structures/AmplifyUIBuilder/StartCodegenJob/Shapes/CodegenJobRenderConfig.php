<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReactStartCodegenJobData $react
 */
class CodegenJobRenderConfig extends Shape
{
    /**
     * @param array{react?: ReactStartCodegenJobData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
