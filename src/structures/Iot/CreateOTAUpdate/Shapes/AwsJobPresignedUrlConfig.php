<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $expiresInSec
 */
class AwsJobPresignedUrlConfig extends Shape
{
    /**
     * @param array{expiresInSec?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
