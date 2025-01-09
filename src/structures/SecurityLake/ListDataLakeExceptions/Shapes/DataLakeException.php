<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakeExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exception
 * @property string $region
 * @property string $remediation
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class DataLakeException extends Shape
{
    /**
     * @param array{
     *     exception?: string,
     *     region?: string,
     *     remediation?: string,
     *     timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
