<?php

namespace Sunaoka\Aws\Structures\RAM\PromotePermissionCreatedFromPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'STRING'|'STRING_LIST'|null $type
 * @property string|null $description
 * @property list<string>|null $values
 */
class PermissionTemplateParameter extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'STRING'|'STRING_LIST'|null,
     *     description?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
