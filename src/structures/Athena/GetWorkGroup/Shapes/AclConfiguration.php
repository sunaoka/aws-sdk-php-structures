<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUCKET_OWNER_FULL_CONTROL' $S3AclOption
 */
class AclConfiguration extends Shape
{
    /**
     * @param array{S3AclOption: 'BUCKET_OWNER_FULL_CONTROL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
