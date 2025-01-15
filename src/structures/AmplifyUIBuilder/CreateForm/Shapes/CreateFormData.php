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
 * @property FormCTA|null $cta
 * @property array<string, string>|null $tags
 * @property 'required'|'optional'|'none'|null $labelDecorator
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
     *     cta?: FormCTA|null,
     *     tags?: array<string, string>|null,
     *     labelDecorator?: 'required'|'optional'|'none'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
