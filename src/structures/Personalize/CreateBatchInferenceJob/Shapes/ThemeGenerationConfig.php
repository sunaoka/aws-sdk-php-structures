<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldsForThemeGeneration $fieldsForThemeGeneration
 */
class ThemeGenerationConfig extends Shape
{
    /**
     * @param array{fieldsForThemeGeneration: FieldsForThemeGeneration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
