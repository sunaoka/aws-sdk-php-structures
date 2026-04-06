<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property AudioLogDestination $destination
 */
class AudioLogSetting extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     destination: AudioLogDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
