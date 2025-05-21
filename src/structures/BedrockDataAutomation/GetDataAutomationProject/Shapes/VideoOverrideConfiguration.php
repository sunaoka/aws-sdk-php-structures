<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModalityProcessingConfiguration|null $modalityProcessing
 */
class VideoOverrideConfiguration extends Shape
{
    /**
     * @param array{modalityProcessing?: ModalityProcessingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
