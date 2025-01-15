<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property FormDataTypeConfig|null $dataType
 * @property 'create'|'update'|null $formActionType
 * @property array<string, FieldConfig>|null $fields
 * @property FormStyle|null $style
 * @property array<string, SectionalElement>|null $sectionalElements
 * @property string|null $schemaVersion
 * @property FormCTA|null $cta
 * @property 'required'|'optional'|'none'|null $labelDecorator
 */
class UpdateFormData extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     dataType?: FormDataTypeConfig|null,
     *     formActionType?: 'create'|'update'|null,
     *     fields?: array<string, FieldConfig>|null,
     *     style?: FormStyle|null,
     *     sectionalElements?: array<string, SectionalElement>|null,
     *     schemaVersion?: string|null,
     *     cta?: FormCTA|null,
     *     labelDecorator?: 'required'|'optional'|'none'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
