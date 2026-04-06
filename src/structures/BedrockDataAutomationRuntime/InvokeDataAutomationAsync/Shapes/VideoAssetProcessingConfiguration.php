<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoSegmentConfiguration|null $segmentConfiguration
 */
class VideoAssetProcessingConfiguration extends Shape
{
    /**
     * @param array{segmentConfiguration?: VideoSegmentConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
