<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\GetTrainingOperationResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $data
 * @property string $dtype
 * @property list<int>|null $shape
 */
class TensorData extends Shape
{
    /**
     * @param array{
     *     data: Document,
     *     dtype: string,
     *     shape?: list<int>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
