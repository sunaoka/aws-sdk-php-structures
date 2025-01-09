<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSessionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ConversationEndState'|'LocaleId' $name
 */
class AnalyticsSessionGroupBySpecification extends Shape
{
    /**
     * @param array{name: 'ConversationEndState'|'LocaleId'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
