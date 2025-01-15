<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CsvContentTypes
 * @property list<string>|null $JsonContentTypes
 */
class CaptureContentTypeHeader extends Shape
{
    /**
     * @param array{
     *     CsvContentTypes?: list<string>|null,
     *     JsonContentTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
