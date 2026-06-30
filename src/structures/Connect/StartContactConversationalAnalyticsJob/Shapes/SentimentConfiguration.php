<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enable'|'Disable' $Behavior
 */
class SentimentConfiguration extends Shape
{
    /**
     * @param array{Behavior: 'Enable'|'Disable'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
