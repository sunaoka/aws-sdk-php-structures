<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $markerName
 * @property string|null $details
 */
class RecordMarkerDecisionAttributes extends Shape
{
    /**
     * @param array{
     *     markerName: string,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
