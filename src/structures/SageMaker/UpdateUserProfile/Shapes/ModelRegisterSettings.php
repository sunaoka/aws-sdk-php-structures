<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property string|null $CrossAccountModelRegisterRoleArn
 */
class ModelRegisterSettings extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLED'|'DISABLED'|null,
     *     CrossAccountModelRegisterRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
