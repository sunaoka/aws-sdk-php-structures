<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP'|null $FileCompression
 * @property string|null $Charset
 */
class JsonFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: 'NONE'|'GZIP'|null,
     *     Charset?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
