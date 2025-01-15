<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AssumableRoleArns
 * @property list<string>|null $ExecutionRoleArns
 */
class EmrSettings extends Shape
{
    /**
     * @param array{
     *     AssumableRoleArns?: list<string>|null,
     *     ExecutionRoleArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
