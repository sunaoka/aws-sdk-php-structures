<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemName
 */
class FieldsForThemeGeneration extends Shape
{
    /**
     * @param array{itemName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
