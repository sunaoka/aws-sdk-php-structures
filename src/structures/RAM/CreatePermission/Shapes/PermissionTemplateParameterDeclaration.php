<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'STRING'|'STRING_LIST'|null $type
 * @property string|null $description
 */
class PermissionTemplateParameterDeclaration extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'STRING'|'STRING_LIST'|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
