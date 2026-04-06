<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RuntimeSettings|null $runtimeSettings
 * @property BuildtimeSettings|null $buildtimeSettings
 */
class GenerativeAISettings extends Shape
{
    /**
     * @param array{
     *     runtimeSettings?: RuntimeSettings|null,
     *     buildtimeSettings?: BuildtimeSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
