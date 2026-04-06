<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentExtractionGranularity $granularity
 * @property DocumentBoundingBox $boundingBox
 */
class DocumentStandardExtraction extends Shape
{
    /**
     * @param array{
     *     granularity: DocumentExtractionGranularity,
     *     boundingBox: DocumentBoundingBox
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
