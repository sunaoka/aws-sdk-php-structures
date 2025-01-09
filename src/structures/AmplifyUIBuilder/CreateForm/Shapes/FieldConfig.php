<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $label
 * @property FieldPosition $position
 * @property bool $excluded
 * @property FieldInputConfig $inputType
 * @property list<FieldValidationConfiguration> $validations
 */
class FieldConfig extends Shape
{
    /**
     * @param array{
     *     label?: string,
     *     position?: FieldPosition,
     *     excluded?: bool,
     *     inputType?: FieldInputConfig,
     *     validations?: list<FieldValidationConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
