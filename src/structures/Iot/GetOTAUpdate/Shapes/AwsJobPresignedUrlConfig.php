<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $expiresInSec
 */
class AwsJobPresignedUrlConfig extends Shape
{
    /**
     * @param array{expiresInSec?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
