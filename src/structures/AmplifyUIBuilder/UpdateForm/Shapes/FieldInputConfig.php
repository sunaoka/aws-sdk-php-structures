<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property bool $required
 * @property bool $readOnly
 * @property string $placeholder
 * @property string $defaultValue
 * @property string $descriptiveText
 * @property bool $defaultChecked
 * @property string $defaultCountryCode
 * @property ValueMappings $valueMappings
 * @property string $name
 * @property float $minValue
 * @property float $maxValue
 * @property float $step
 * @property string $value
 * @property bool $isArray
 * @property FileUploaderFieldConfig $fileUploaderConfig
 */
class FieldInputConfig extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     required?: bool,
     *     readOnly?: bool,
     *     placeholder?: string,
     *     defaultValue?: string,
     *     descriptiveText?: string,
     *     defaultChecked?: bool,
     *     defaultCountryCode?: string,
     *     valueMappings?: ValueMappings,
     *     name?: string,
     *     minValue?: float,
     *     maxValue?: float,
     *     step?: float,
     *     value?: string,
     *     isArray?: bool,
     *     fileUploaderConfig?: FileUploaderFieldConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
