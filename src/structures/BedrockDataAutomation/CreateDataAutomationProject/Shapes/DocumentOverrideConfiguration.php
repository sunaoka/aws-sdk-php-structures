<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SplitterConfiguration|null $splitter
 * @property ModalityProcessingConfiguration|null $modalityProcessing
 * @property SensitiveDataConfiguration|null $sensitiveDataConfiguration
 */
class DocumentOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     splitter?: SplitterConfiguration|null,
     *     modalityProcessing?: ModalityProcessingConfiguration|null,
     *     sensitiveDataConfiguration?: SensitiveDataConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
