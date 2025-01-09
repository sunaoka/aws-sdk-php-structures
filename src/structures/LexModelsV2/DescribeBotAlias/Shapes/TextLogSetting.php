<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property TextLogDestination $destination
 * @property bool $selectiveLoggingEnabled
 */
class TextLogSetting extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     destination: TextLogDestination,
     *     selectiveLoggingEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
