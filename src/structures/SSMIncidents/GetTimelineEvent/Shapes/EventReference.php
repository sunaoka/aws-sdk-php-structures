<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetTimelineEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $relatedItemId
 * @property string|null $resource
 */
class EventReference extends Shape
{
    /**
     * @param array{
     *     relatedItemId?: string|null,
     *     resource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
