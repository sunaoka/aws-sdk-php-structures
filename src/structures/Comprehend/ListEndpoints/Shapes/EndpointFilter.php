<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelArn
 * @property 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 */
class EndpointFilter extends Shape
{
    /**
     * @param array{
     *     ModelArn?: string|null,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING'|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
