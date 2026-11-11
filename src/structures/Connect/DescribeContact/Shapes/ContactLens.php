<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConversationalAnalytics|null $ConversationalAnalytics
 */
class ContactLens extends Shape
{
    /**
     * @param array{ConversationalAnalytics?: ConversationalAnalytics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
