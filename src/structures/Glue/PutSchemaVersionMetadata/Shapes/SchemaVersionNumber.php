<?php

namespace Sunaoka\Aws\Structures\Glue\PutSchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $LatestVersion
 * @property int<1, 100000> $VersionNumber
 */
class SchemaVersionNumber extends Shape
{
    /**
     * @param array{
     *     LatestVersion?: bool,
     *     VersionNumber?: int<1, 100000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
