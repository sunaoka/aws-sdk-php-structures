<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldId
 */
class RequiredField extends Shape
{
    /**
     * @param array{fieldId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
