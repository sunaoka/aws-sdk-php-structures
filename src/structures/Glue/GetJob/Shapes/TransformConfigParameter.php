<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'str'|'int'|'float'|'complex'|'bool'|'list'|'null' $Type
 * @property string $ValidationRule
 * @property string $ValidationMessage
 * @property list<string> $Value
 * @property 'str'|'int'|'float'|'complex'|'bool'|'list'|'null' $ListType
 * @property bool $IsOptional
 */
class TransformConfigParameter extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'str'|'int'|'float'|'complex'|'bool'|'list'|'null',
     *     ValidationRule?: string,
     *     ValidationMessage?: string,
     *     Value?: list<string>,
     *     ListType?: 'str'|'int'|'float'|'complex'|'bool'|'list'|'null',
     *     IsOptional?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
