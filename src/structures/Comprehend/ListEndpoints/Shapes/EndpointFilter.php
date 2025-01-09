<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelArn
 * @property 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING' $Status
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 */
class EndpointFilter extends Shape
{
    /**
     * @param array{
     *     ModelArn?: string,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'IN_SERVICE'|'UPDATING',
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
