<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Table|null $Table
 * @property string|null $VersionId
 */
class TableVersion extends Shape
{
    /**
     * @param array{
     *     Table?: Table|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
