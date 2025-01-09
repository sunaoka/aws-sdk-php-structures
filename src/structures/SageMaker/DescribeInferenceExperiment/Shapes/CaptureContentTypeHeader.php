<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CsvContentTypes
 * @property list<string> $JsonContentTypes
 */
class CaptureContentTypeHeader extends Shape
{
    /**
     * @param array{
     *     CsvContentTypes?: list<string>,
     *     JsonContentTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
