<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecordRowDelimiter
 * @property string $RecordColumnDelimiter
 */
class CSVMappingParameters extends Shape
{
    /**
     * @param array{
     *     RecordRowDelimiter: string,
     *     RecordColumnDelimiter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
