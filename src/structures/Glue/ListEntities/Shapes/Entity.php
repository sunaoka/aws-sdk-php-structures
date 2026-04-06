<?php

namespace Sunaoka\Aws\Structures\Glue\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityName
 * @property string|null $Label
 * @property bool|null $IsParentEntity
 * @property string|null $Description
 * @property string|null $Category
 * @property array<string, string>|null $CustomProperties
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     EntityName?: string|null,
     *     Label?: string|null,
     *     IsParentEntity?: bool|null,
     *     Description?: string|null,
     *     Category?: string|null,
     *     CustomProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
