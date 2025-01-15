<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Configuration|null $S3Configuration
 */
class MagneticStoreRejectedDataLocation extends Shape
{
    /**
     * @param array{S3Configuration?: S3Configuration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
