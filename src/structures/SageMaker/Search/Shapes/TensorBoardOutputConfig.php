<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalPath
 * @property string $S3OutputPath
 */
class TensorBoardOutputConfig extends Shape
{
    /**
     * @param array{
     *     LocalPath?: string|null,
     *     S3OutputPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
