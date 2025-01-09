<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextLogSetting> $textLogSettings
 * @property list<AudioLogSetting> $audioLogSettings
 */
class ConversationLogSettings extends Shape
{
    /**
     * @param array{
     *     textLogSettings?: list<TextLogSetting>,
     *     audioLogSettings?: list<AudioLogSetting>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
