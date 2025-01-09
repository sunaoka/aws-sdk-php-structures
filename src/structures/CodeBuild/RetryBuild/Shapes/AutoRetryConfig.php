<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $autoRetryLimit
 * @property int $autoRetryNumber
 * @property string $nextAutoRetry
 * @property string $previousAutoRetry
 */
class AutoRetryConfig extends Shape
{
    /**
     * @param array{
     *     autoRetryLimit?: int,
     *     autoRetryNumber?: int,
     *     nextAutoRetry?: string,
     *     previousAutoRetry?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
