<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property list<string>|null $strValues
 * @property list<int>|null $numValues
 * @property string|null $validationMessage
 */
class FieldValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     strValues?: list<string>|null,
     *     numValues?: list<int>|null,
     *     validationMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
