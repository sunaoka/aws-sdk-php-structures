<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadWriteAccess $ReadWriteAccess
 */
class S3AccessGrantsScopeUnion extends Shape
{
    /**
     * @param array{ReadWriteAccess?: ReadWriteAccess} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
