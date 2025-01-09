<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationEndState'|'LocaleId' $name
 * @property string $value
 */
class AnalyticsSessionGroupByKey extends Shape
{
    /**
     * @param array{
     *     name?: 'ConversationEndState'|'LocaleId',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
