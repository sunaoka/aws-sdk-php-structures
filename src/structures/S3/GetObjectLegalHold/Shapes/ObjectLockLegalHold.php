<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectLegalHold\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON'|'OFF' $Status
 */
class ObjectLockLegalHold extends Shape
{
    /**
     * @param array{Status?: 'ON'|'OFF'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
