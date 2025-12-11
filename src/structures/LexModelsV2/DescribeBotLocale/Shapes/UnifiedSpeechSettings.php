<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpeechFoundationModel $speechFoundationModel
 */
class UnifiedSpeechSettings extends Shape
{
    /**
     * @param array{speechFoundationModel: SpeechFoundationModel} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
