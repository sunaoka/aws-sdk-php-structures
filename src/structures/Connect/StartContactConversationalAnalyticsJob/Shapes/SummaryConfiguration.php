<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactConversationalAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PostContact'|'AutomatedInteraction'|'ContactChain'> $SummaryModes
 */
class SummaryConfiguration extends Shape
{
    /**
     * @param array{SummaryModes: list<'PostContact'|'AutomatedInteraction'|'ContactChain'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
