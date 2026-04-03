<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibraryEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VocabularyEntity|null $vocabulary
 */
class EntityDetails extends Shape
{
    /**
     * @param array{vocabulary?: VocabularyEntity|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
