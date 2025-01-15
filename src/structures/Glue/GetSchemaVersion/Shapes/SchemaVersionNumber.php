<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchemaVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $LatestVersion
 * @property int<1, 100000>|null $VersionNumber
 */
class SchemaVersionNumber extends Shape
{
    /**
     * @param array{
     *     LatestVersion?: bool|null,
     *     VersionNumber?: int<1, 100000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
