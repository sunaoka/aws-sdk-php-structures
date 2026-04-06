<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionRoleArn
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class EmrServerlessSettings extends Shape
{
    /**
     * @param array{
     *     ExecutionRoleArn?: string|null,
     *     Status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
