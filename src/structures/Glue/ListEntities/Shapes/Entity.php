<?php

namespace Sunaoka\Aws\Structures\Glue\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityName
 * @property string $Label
 * @property bool $IsParentEntity
 * @property string $Description
 * @property string $Category
 * @property array<string, string> $CustomProperties
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     EntityName?: string,
     *     Label?: string,
     *     IsParentEntity?: bool,
     *     Description?: string,
     *     Category?: string,
     *     CustomProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
