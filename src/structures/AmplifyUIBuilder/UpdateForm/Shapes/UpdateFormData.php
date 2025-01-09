<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property FormDataTypeConfig $dataType
 * @property 'create'|'update' $formActionType
 * @property array<string, FieldConfig> $fields
 * @property FormStyle $style
 * @property array<string, SectionalElement> $sectionalElements
 * @property string $schemaVersion
 * @property FormCTA $cta
 * @property 'required'|'optional'|'none' $labelDecorator
 */
class UpdateFormData extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     dataType?: FormDataTypeConfig,
     *     formActionType?: 'create'|'update',
     *     fields?: array<string, FieldConfig>,
     *     style?: FormStyle,
     *     sectionalElements?: array<string, SectionalElement>,
     *     schemaVersion?: string,
     *     cta?: FormCTA,
     *     labelDecorator?: 'required'|'optional'|'none'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
