<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelCardExportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 */
class ModelCardExportOutputConfig extends Shape
{
    /**
     * @param array{S3OutputPath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
