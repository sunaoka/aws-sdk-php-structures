<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $status
 * @property string|null $reason
 * @property string|null $failureResource
 */
class EnvironmentLifecycle extends Shape
{
    /**
     * @param array{
     *     status?: 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED'|null,
     *     reason?: string|null,
     *     failureResource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
