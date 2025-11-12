<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModalityProcessingConfiguration|null $modalityProcessing
 * @property AudioLanguageConfiguration|null $languageConfiguration
 */
class AudioOverrideConfiguration extends Shape
{
    /**
     * @param array{
     *     modalityProcessing?: ModalityProcessingConfiguration|null,
     *     languageConfiguration?: AudioLanguageConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
