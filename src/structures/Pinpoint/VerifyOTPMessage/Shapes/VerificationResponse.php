<?php

namespace Sunaoka\Aws\Structures\Pinpoint\VerifyOTPMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Valid
 */
class VerificationResponse extends Shape
{
    /**
     * @param array{Valid?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
