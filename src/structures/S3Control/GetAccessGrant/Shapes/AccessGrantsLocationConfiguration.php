<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3SubPrefix
 */
class AccessGrantsLocationConfiguration extends Shape
{
    /**
     * @param array{S3SubPrefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
