<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Retain'|'Delete'|null $HomeEfsFileSystem
 */
class RetentionPolicy extends Shape
{
    /**
     * @param array{HomeEfsFileSystem?: 'Retain'|'Delete'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
