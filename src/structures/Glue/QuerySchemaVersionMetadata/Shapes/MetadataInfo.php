<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetadataValue
 * @property string|null $CreatedTime
 * @property list<OtherMetadataValueListItem>|null $OtherMetadataValueList
 */
class MetadataInfo extends Shape
{
    /**
     * @param array{
     *     MetadataValue?: string|null,
     *     CreatedTime?: string|null,
     *     OtherMetadataValueList?: list<OtherMetadataValueListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
