<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationEndState'|'LocaleId'|null $name
 * @property string|null $value
 */
class AnalyticsSessionGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'ConversationEndState'|'LocaleId'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
