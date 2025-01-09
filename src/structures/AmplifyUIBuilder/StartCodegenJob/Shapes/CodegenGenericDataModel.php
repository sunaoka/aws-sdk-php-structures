<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, CodegenGenericDataField> $fields
 * @property bool $isJoinTable
 * @property list<string> $primaryKeys
 */
class CodegenGenericDataModel extends Shape
{
    /**
     * @param array{
     *     fields: array<string, CodegenGenericDataField>,
     *     isJoinTable?: bool,
     *     primaryKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
