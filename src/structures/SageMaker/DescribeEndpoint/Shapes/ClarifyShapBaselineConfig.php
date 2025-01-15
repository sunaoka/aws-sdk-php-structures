<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MimeType
 * @property string|null $ShapBaseline
 * @property string|null $ShapBaselineUri
 */
class ClarifyShapBaselineConfig extends Shape
{
    /**
     * @param array{
     *     MimeType?: string|null,
     *     ShapBaseline?: string|null,
     *     ShapBaselineUri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
