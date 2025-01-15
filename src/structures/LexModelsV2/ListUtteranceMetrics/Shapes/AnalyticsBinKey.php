<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListUtteranceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationStartTime'|'UtteranceTimestamp'|null $name
 * @property int|null $value
 */
class AnalyticsBinKey extends Shape
{
    /**
     * @param array{
     *     name?: 'ConversationStartTime'|'UtteranceTimestamp'|null,
     *     value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
