<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $State
 */
class EventInfo extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     State?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
