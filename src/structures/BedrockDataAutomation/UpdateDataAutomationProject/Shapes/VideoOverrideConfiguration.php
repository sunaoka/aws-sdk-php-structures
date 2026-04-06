<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModalityProcessingConfiguration|null $modalityProcessing
 * @property SensitiveDataConfiguration|null $sensitiveDataConfiguration
 */
class VideoOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     modalityProcessing?: ModalityProcessingConfiguration|null,
     *     sensitiveDataConfiguration?: SensitiveDataConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
