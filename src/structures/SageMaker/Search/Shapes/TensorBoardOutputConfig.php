<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalPath
 * @property string $S3OutputPath
 */
class TensorBoardOutputConfig extends Shape
{
    /**
     * @param array{
     *     LocalPath?: string,
     *     S3OutputPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
