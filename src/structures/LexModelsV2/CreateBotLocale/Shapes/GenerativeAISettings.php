<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuntimeSettings $runtimeSettings
 * @property BuildtimeSettings $buildtimeSettings
 */
class GenerativeAISettings extends Shape
{
    /**
     * @param array{
     *     runtimeSettings?: RuntimeSettings,
     *     buildtimeSettings?: BuildtimeSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
