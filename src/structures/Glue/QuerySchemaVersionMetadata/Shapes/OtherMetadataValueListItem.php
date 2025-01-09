<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetadataValue
 * @property string $CreatedTime
 */
class OtherMetadataValueListItem extends Shape
{
    /**
     * @param array{
     *     MetadataValue?: string,
     *     CreatedTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
