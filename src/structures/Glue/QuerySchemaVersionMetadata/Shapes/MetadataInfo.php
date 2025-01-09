<?php

namespace Sunaoka\Aws\Structures\Glue\QuerySchemaVersionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetadataValue
 * @property string $CreatedTime
 * @property list<OtherMetadataValueListItem> $OtherMetadataValueList
 */
class MetadataInfo extends Shape
{
    /**
     * @param array{
     *     MetadataValue?: string,
     *     CreatedTime?: string,
     *     OtherMetadataValueList?: list<OtherMetadataValueListItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
