<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100000>|null $VersionNumber
 * @property ErrorDetails|null $ErrorDetails
 */
class SchemaVersionErrorItem extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int<1, 100000>|null,
     *     ErrorDetails?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
