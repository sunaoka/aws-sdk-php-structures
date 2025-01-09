<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersionsDiff\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $LatestVersion
 * @property int $VersionNumber
 */
class SchemaVersionNumber extends Shape
{
    /**
     * @param array{
     *     LatestVersion?: bool,
     *     VersionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
