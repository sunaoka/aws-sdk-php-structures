<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3SubPrefix
 */
class AccessGrantsLocationConfiguration extends Shape
{
    /**
     * @param array{S3SubPrefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
