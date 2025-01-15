<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'PENDING'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property UpdateError|null $Error
 * @property string|null $Source
 */
class LastUpdate extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCESS'|'PENDING'|'FAILED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Error?: UpdateError|null,
     *     Source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
