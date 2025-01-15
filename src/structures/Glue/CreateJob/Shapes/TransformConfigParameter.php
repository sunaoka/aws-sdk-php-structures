<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'str'|'int'|'float'|'complex'|'bool'|'list'|'null' $Type
 * @property string|null $ValidationRule
 * @property string|null $ValidationMessage
 * @property list<string>|null $Value
 * @property 'str'|'int'|'float'|'complex'|'bool'|'list'|'null'|null $ListType
 * @property bool|null $IsOptional
 */
class TransformConfigParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'str'|'int'|'float'|'complex'|'bool'|'list'|'null',
     *     ValidationRule?: string|null,
     *     ValidationMessage?: string|null,
     *     Value?: list<string>|null,
     *     ListType?: 'str'|'int'|'float'|'complex'|'bool'|'list'|'null'|null,
     *     IsOptional?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
