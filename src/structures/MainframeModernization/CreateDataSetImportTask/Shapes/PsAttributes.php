<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $encoding
 * @property string $format
 */
class PsAttributes extends Shape
{
    /**
     * @param array{
     *     encoding?: string,
     *     format: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
