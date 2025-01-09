<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'PENDING'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property UpdateError $Error
 * @property string $Source
 */
class LastUpdate extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCESS'|'PENDING'|'FAILED',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Error?: UpdateError,
     *     Source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
