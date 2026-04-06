<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VideoAssetProcessingConfiguration|null $video
 */
class AssetProcessingConfiguration extends Shape
{
    /**
     * @param array{video?: VideoAssetProcessingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
