<?php

namespace Sunaoka\Aws\Structures\RAM\CreateResourceShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $permissionArn
 * @property list<PermissionTemplateParameterInput>|null $permissionTemplateParameters
 */
class PermissionArnAndTemplateParameters extends Shape
{
    /**
     * @param array{
     *     permissionArn?: string|null,
     *     permissionTemplateParameters?: list<PermissionTemplateParameterInput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
