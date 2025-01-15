<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON'|'OFF'|null $Status
 */
class ObjectLockLegalHold extends Shape
{
    /**
     * @param array{Status?: 'ON'|'OFF'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
