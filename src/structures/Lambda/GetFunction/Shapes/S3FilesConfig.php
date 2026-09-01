<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'AUTO'|null $DirectS3Read
 */
class S3FilesConfig extends Shape
{
    /**
     * @param array{DirectS3Read?: 'ENABLED'|'DISABLED'|'AUTO'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
