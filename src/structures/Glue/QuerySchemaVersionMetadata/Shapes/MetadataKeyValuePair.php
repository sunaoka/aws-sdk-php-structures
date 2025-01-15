<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetadataKey
 * @property string|null $MetadataValue
 */
class MetadataKeyValuePair extends Shape
{
    /**
     * @param array{
     *     MetadataKey?: string|null,
     *     MetadataValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
