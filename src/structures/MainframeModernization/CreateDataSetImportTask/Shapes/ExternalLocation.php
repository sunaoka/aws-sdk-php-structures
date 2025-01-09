<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Location
 */
class ExternalLocation extends Shape
{
    /**
     * @param array{s3Location?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
