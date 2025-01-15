<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $label
 * @property FieldPosition|null $position
 * @property bool|null $excluded
 * @property FieldInputConfig|null $inputType
 * @property list<FieldValidationConfiguration>|null $validations
 */
class FieldConfig extends Shape
{
    /**
     * @param array{
     *     label?: string|null,
     *     position?: FieldPosition|null,
     *     excluded?: bool|null,
     *     inputType?: FieldInputConfig|null,
     *     validations?: list<FieldValidationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
