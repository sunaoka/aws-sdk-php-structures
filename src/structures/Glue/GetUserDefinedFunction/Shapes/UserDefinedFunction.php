<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionName
 * @property string|null $DatabaseName
 * @property string|null $ClassName
 * @property string|null $OwnerName
 * @property 'REGULAR_FUNCTION'|'AGGREGATE_FUNCTION'|'STORED_PROCEDURE'|null $FunctionType
 * @property 'USER'|'ROLE'|'GROUP'|null $OwnerType
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<ResourceUri>|null $ResourceUris
 * @property string|null $CatalogId
 */
class UserDefinedFunction extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string|null,
     *     DatabaseName?: string|null,
     *     ClassName?: string|null,
     *     OwnerName?: string|null,
     *     FunctionType?: 'REGULAR_FUNCTION'|'AGGREGATE_FUNCTION'|'STORED_PROCEDURE'|null,
     *     OwnerType?: 'USER'|'ROLE'|'GROUP'|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     ResourceUris?: list<ResourceUri>|null,
     *     CatalogId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
