<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $platform
 * @property string $certificatePathOnDevice
 */
class SigningProfileParameter extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     platform?: string,
     *     certificatePathOnDevice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
