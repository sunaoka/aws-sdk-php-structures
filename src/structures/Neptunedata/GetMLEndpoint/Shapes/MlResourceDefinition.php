<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $status
 * @property string|null $outputLocation
 * @property string|null $failureReason
 * @property string|null $cloudwatchLogUrl
 */
class MlResourceDefinition extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     status?: string|null,
     *     outputLocation?: string|null,
     *     failureReason?: string|null,
     *     cloudwatchLogUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
