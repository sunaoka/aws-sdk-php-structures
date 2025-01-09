<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ObjectLockLegalHold $LegalHold
 */
class S3SetObjectLegalHoldOperation extends Shape
{
    /**
     * @param array{LegalHold: S3ObjectLockLegalHold} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
