<?php

namespace Sunaoka\Aws\Structures\Cloud9\DescribeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED' $status
 * @property string $reason
 * @property string $failureResource
 */
class EnvironmentLifecycle extends Shape
{
    /**
     * @param array{
     *     status?: 'CREATING'|'CREATED'|'CREATE_FAILED'|'DELETING'|'DELETE_FAILED',
     *     reason?: string,
     *     failureResource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
