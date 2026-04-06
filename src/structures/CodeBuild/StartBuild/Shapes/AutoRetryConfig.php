<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $autoRetryLimit
 * @property int|null $autoRetryNumber
 * @property string|null $nextAutoRetry
 * @property string|null $previousAutoRetry
 */
class AutoRetryConfig extends Shape
{
    /**
     * @param array{
     *     autoRetryLimit?: int|null,
     *     autoRetryNumber?: int|null,
     *     nextAutoRetry?: string|null,
     *     previousAutoRetry?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
