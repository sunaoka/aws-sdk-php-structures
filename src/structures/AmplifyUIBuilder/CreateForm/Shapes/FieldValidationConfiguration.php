<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property list<string> $strValues
 * @property list<int> $numValues
 * @property string $validationMessage
 */
class FieldValidationConfiguration extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     strValues?: list<string>,
     *     numValues?: list<int>,
     *     validationMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
