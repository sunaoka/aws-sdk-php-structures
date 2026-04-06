<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReadWriteAccess|null $ReadWriteAccess
 */
class S3AccessGrantsScopeUnion extends Shape
{
    /**
     * @param array{ReadWriteAccess?: ReadWriteAccess|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
