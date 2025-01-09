<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionName
 * @property string $DatabaseName
 * @property string $ClassName
 * @property string $OwnerName
 * @property 'USER'|'ROLE'|'GROUP' $OwnerType
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<ResourceUri> $ResourceUris
 * @property string $CatalogId
 */
class UserDefinedFunction extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string,
     *     DatabaseName?: string,
     *     ClassName?: string,
     *     OwnerName?: string,
     *     OwnerType?: 'USER'|'ROLE'|'GROUP',
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     ResourceUris?: list<ResourceUri>,
     *     CatalogId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
