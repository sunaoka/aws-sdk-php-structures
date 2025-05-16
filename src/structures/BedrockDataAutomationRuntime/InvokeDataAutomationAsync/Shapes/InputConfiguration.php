<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property AssetProcessingConfiguration|null $assetProcessingConfiguration
 */
class InputConfiguration extends Shape
{
    /**
     * @param array{
     *     s3Uri: string,
     *     assetProcessingConfiguration?: AssetProcessingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
