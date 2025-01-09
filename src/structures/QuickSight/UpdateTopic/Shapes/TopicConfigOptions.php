<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $QBusinessInsightsEnabled
 */
class TopicConfigOptions extends Shape
{
    /**
     * @param array{QBusinessInsightsEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
