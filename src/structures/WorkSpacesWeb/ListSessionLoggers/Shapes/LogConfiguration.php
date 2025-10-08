<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListSessionLoggers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogConfiguration|null $s3
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{s3?: S3LogConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
