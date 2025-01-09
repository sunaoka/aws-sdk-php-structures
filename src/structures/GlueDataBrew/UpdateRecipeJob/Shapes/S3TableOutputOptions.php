<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateRecipeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $Location
 */
class S3TableOutputOptions extends Shape
{
    /**
     * @param array{Location: S3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
