<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetNotifyCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NUMERIC'|'ALPHA'|'ALPHANUMERIC'|null $codeType
 * @property int<4, 8>|null $codeLength
 * @property int<1, 60>|null $validityPeriodMinutes
 * @property int<1, 5>|null $maxAttempts
 */
class CodeConfigurationParameters extends Shape
{
    /**
     * @param array{
     *     codeType?: 'NUMERIC'|'ALPHA'|'ALPHANUMERIC'|null,
     *     codeLength?: int<4, 8>|null,
     *     validityPeriodMinutes?: int<1, 60>|null,
     *     maxAttempts?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
