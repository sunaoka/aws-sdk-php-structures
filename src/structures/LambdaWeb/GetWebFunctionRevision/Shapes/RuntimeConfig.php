<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunctionRevision\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $runtime
 */
class RuntimeConfig extends Shape
{
    /**
     * @param array{runtime: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
