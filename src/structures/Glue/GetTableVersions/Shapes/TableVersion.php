<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Table $Table
 * @property string $VersionId
 */
class TableVersion extends Shape
{
    /**
     * @param array{
     *     Table?: Table,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
