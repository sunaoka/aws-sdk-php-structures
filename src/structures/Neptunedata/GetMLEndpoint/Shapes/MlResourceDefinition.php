<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetMLEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $status
 * @property string $outputLocation
 * @property string $failureReason
 * @property string $cloudwatchLogUrl
 */
class MlResourceDefinition extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     status?: string,
     *     outputLocation?: string,
     *     failureReason?: string,
     *     cloudwatchLogUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
