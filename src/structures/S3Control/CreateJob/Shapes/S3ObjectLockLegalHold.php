<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'ON' $Status
 */
class S3ObjectLockLegalHold extends Shape
{
    /**
     * @param array{Status: 'OFF'|'ON'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
