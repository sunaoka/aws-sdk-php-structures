<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModalityProcessingConfiguration|null $modalityProcessing
 * @property AudioLanguageConfiguration|null $languageConfiguration
 * @property SensitiveDataConfiguration|null $sensitiveDataConfiguration
 */
class AudioOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     modalityProcessing?: ModalityProcessingConfiguration|null,
     *     languageConfiguration?: AudioLanguageConfiguration|null,
     *     sensitiveDataConfiguration?: SensitiveDataConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
