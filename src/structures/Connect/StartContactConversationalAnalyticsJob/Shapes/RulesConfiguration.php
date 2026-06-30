<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enable'|'Disable'|null $Behavior
 */
class RulesConfiguration extends Shape
{
    /**
     * @param array{Behavior?: 'Enable'|'Disable'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
