<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModalityProcessingConfiguration|null $modalityProcessing
 */
class AudioOverrideConfiguration extends Shape
{
    /**
     * @param array{modalityProcessing?: ModalityProcessingConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
