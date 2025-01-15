<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLockConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultRetention|null $DefaultRetention
 */
class ObjectLockRule extends Shape
{
    /**
     * @param array{DefaultRetention?: DefaultRetention|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
