<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionRoleArn
 * @property 'ENABLED'|'DISABLED' $Status
 */
class EmrServerlessSettings extends Shape
{
    /**
     * @param array{
     *     ExecutionRoleArn?: string,
     *     Status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
