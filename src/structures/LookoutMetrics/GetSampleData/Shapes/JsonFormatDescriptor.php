<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetSampleData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'GZIP' $FileCompression
 * @property string $Charset
 */
class JsonFormatDescriptor extends Shape
{
    /**
     * @param array{
     *     FileCompression?: 'NONE'|'GZIP',
     *     Charset?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
