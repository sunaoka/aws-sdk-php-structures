<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\InvokeDataAutomationLibraryIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VocabularyEntityInfo|null $vocabulary
 */
class UpsertEntityInfo extends Shape
{
    /**
     * @param array{vocabulary?: VocabularyEntityInfo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
