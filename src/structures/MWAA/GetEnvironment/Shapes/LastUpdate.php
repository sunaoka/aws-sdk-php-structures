<?php

namespace Sunaoka\Aws\Structures\MWAA\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property UpdateError|null $Error
 * @property string|null $Source
 * @property 'SUCCESS'|'PENDING'|'FAILED'|null $Status
 */
class LastUpdate extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Error?: UpdateError|null,
     *     Source?: string|null,
     *     Status?: 'SUCCESS'|'PENDING'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
