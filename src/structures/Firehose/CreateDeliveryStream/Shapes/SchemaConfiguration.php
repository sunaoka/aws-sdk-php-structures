<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Region
 * @property string $VersionId
 */
class SchemaConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleARN?: string,
     *     CatalogId?: string,
     *     DatabaseName?: string,
     *     TableName?: string,
     *     Region?: string,
     *     VersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
