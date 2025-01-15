<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property bool|null $required
 * @property bool|null $readOnly
 * @property string|null $placeholder
 * @property string|null $defaultValue
 * @property string|null $descriptiveText
 * @property bool|null $defaultChecked
 * @property string|null $defaultCountryCode
 * @property ValueMappings|null $valueMappings
 * @property string|null $name
 * @property float|null $minValue
 * @property float|null $maxValue
 * @property float|null $step
 * @property string|null $value
 * @property bool|null $isArray
 * @property FileUploaderFieldConfig|null $fileUploaderConfig
 */
class FieldInputConfig extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     required?: bool|null,
     *     readOnly?: bool|null,
     *     placeholder?: string|null,
     *     defaultValue?: string|null,
     *     descriptiveText?: string|null,
     *     defaultChecked?: bool|null,
     *     defaultCountryCode?: string|null,
     *     valueMappings?: ValueMappings|null,
     *     name?: string|null,
     *     minValue?: float|null,
     *     maxValue?: float|null,
     *     step?: float|null,
     *     value?: string|null,
     *     isArray?: bool|null,
     *     fileUploaderConfig?: FileUploaderFieldConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
