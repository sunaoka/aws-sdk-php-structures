<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $VersionNumber
 * @property ErrorDetails $ErrorDetails
 */
class SchemaVersionErrorItem extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int,
     *     ErrorDetails?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
