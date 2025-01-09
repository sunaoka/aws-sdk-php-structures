<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionName
 * @property string $ClassName
 * @property string $OwnerName
 * @property 'USER'|'ROLE'|'GROUP' $OwnerType
 * @property list<ResourceUri> $ResourceUris
 */
class UserDefinedFunctionInput extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string,
     *     ClassName?: string,
     *     OwnerName?: string,
     *     OwnerType?: 'USER'|'ROLE'|'GROUP',
     *     ResourceUris?: list<ResourceUri>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
