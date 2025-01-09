<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetadataKey
 * @property string $MetadataValue
 */
class MetadataKeyValuePair extends Shape
{
    /**
     * @param array{
     *     MetadataKey?: string,
     *     MetadataValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
