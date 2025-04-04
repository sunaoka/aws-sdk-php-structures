<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property AudioLogDestination $destination
 * @property bool|null $selectiveLoggingEnabled
 */
class AudioLogSetting extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     destination: AudioLogDestination,
     *     selectiveLoggingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
