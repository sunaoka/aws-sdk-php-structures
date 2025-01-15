<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleARN
 * @property string|null $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $Region
 * @property string|null $VersionId
 */
class SchemaConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string|null,
     *     CatalogId?: string|null,
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     Region?: string|null,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
