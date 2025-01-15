<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextLogSetting>|null $textLogSettings
 * @property list<AudioLogSetting>|null $audioLogSettings
 */
class ConversationLogSettings extends Shape
{
    /**
     * @param array{
     *     textLogSettings?: list<TextLogSetting>|null,
     *     audioLogSettings?: list<AudioLogSetting>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
