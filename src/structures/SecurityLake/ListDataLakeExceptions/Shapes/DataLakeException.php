<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakeExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $exception
 * @property string|null $region
 * @property string|null $remediation
 * @property \Aws\Api\DateTimeResult|null $timestamp
 */
class DataLakeException extends Shape
{
    /**
     * @param array{
     *     exception?: string|null,
     *     region?: string|null,
     *     remediation?: string|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
