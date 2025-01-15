<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetadataValue
 * @property string|null $CreatedTime
 */
class OtherMetadataValueListItem extends Shape
{
    /**
     * @param array{
     *     MetadataValue?: string|null,
     *     CreatedTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
