<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetTimelineEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $relatedItemId
 * @property string $resource
 */
class EventReference extends Shape
{
    /**
     * @param array{
     *     relatedItemId?: string,
     *     resource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
