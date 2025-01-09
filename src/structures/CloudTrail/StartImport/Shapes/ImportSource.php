<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ImportSource $S3
 */
class ImportSource extends Shape
{
    /**
     * @param array{S3: S3ImportSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
