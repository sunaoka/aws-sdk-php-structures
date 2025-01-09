<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

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
 * @property array<string, string> $tags
 * @property 'required'|'optional'|'none' $labelDecorator
 */
class CreateFormData extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     dataType: FormDataTypeConfig,
     *     formActionType: 'create'|'update',
     *     fields: array<string, FieldConfig>,
     *     style: FormStyle,
     *     sectionalElements: array<string, SectionalElement>,
     *     schemaVersion: string,
     *     cta?: FormCTA,
     *     tags?: array<string, string>,
     *     labelDecorator?: 'required'|'optional'|'none'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
