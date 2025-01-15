<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property TextLogDestination $destination
 * @property bool|null $selectiveLoggingEnabled
 */
class TextLogSetting extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     destination: TextLogDestination,
     *     selectiveLoggingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
