<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionName
 * @property string|null $ClassName
 * @property string|null $OwnerName
 * @property 'USER'|'ROLE'|'GROUP'|null $OwnerType
 * @property list<ResourceUri>|null $ResourceUris
 */
class UserDefinedFunctionInput extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string|null,
     *     ClassName?: string|null,
     *     OwnerName?: string|null,
     *     OwnerType?: 'USER'|'ROLE'|'GROUP'|null,
     *     ResourceUris?: list<ResourceUri>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
