<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $name
 * @property 'create'|'update' $formActionType
 * @property FormStyle $style
 * @property FormDataTypeConfig $dataType
 * @property array<string, FieldConfig> $fields
 * @property array<string, SectionalElement> $sectionalElements
 * @property string $schemaVersion
 * @property array<string, string>|null $tags
 * @property FormCTA|null $cta
 * @property 'required'|'optional'|'none'|null $labelDecorator
 */
class Form extends Shape
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     name: string,
     *     formActionType: 'create'|'update',
     *     style: FormStyle,
     *     dataType: FormDataTypeConfig,
     *     fields: array<string, FieldConfig>,
     *     sectionalElements: array<string, SectionalElement>,
     *     schemaVersion: string,
     *     tags?: array<string, string>|null,
     *     cta?: FormCTA|null,
     *     labelDecorator?: 'required'|'optional'|'none'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
