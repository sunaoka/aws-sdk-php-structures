<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Mode
 */
class AwsLambdaFunctionTracingConfig extends Shape
{
    /**
     * @param array{Mode?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
