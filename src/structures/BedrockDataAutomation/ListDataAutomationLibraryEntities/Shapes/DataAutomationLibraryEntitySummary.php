<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VocabularyEntitySummary|null $vocabulary
 */
class DataAutomationLibraryEntitySummary extends Shape
{
    /**
     * @param array{vocabulary?: VocabularyEntitySummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
