<?php

namespace Sunaoka\Aws\Structures\mgn\RetryDataReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2'|'FSx'|null $type
 * @property string|null $name
 * @property 'PASSED'|'FAILED'|'PENDING'|null $status
 * @property string|null $error
 * @property \Aws\Api\DateTimeResult|null $checkedAt
 */
class LastKnownCheck extends Shape
{
    /**
     * @param array{
     *     type?: 'EC2'|'FSx'|null,
     *     name?: string|null,
     *     status?: 'PASSED'|'FAILED'|'PENDING'|null,
     *     error?: string|null,
     *     checkedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
