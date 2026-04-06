<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $apiTokenSecretArn
 * @property string|null $modelId
 */
class DeepgramSpeechModelConfig extends Shape
{
    /**
     * @param array{
     *     apiTokenSecretArn: string,
     *     modelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
