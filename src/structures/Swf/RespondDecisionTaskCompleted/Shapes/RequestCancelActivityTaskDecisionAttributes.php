<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $activityId
 */
class RequestCancelActivityTaskDecisionAttributes extends Shape
{
    /**
     * @param array{activityId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
