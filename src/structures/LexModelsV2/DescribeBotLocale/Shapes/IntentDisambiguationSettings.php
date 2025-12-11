<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int<2, 5>|null $maxDisambiguationIntents
 * @property string|null $customDisambiguationMessage
 */
class IntentDisambiguationSettings extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     maxDisambiguationIntents?: int<2, 5>|null,
     *     customDisambiguationMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
