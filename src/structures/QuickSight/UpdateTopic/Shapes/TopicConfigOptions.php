<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $QBusinessInsightsEnabled
 */
class TopicConfigOptions extends Shape
{
    /**
     * @param array{QBusinessInsightsEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
