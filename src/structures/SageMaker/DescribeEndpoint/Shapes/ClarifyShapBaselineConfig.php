<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MimeType
 * @property string $ShapBaseline
 * @property string $ShapBaselineUri
 */
class ClarifyShapBaselineConfig extends Shape
{
    /**
     * @param array{
     *     MimeType?: string,
     *     ShapBaseline?: string,
     *     ShapBaselineUri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
