<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $TopicId
 * @property string|null $Name
 */
class TopicSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     TopicId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
