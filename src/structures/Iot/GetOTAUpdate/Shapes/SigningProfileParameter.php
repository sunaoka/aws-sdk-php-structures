<?php

namespace Sunaoka\Aws\Structures\Iot\GetOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $platform
 * @property string|null $certificatePathOnDevice
 */
class SigningProfileParameter extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     platform?: string|null,
     *     certificatePathOnDevice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
