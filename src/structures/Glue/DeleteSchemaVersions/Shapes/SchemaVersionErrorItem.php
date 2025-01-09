<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteSchemaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100000> $VersionNumber
 * @property ErrorDetails $ErrorDetails
 */
class SchemaVersionErrorItem extends Shape
{
    /**
     * @param array{
     *     VersionNumber?: int<1, 100000>,
     *     ErrorDetails?: ErrorDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
