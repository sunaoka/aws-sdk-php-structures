<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\BatchGetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property 'RESOURCE_NOT_FOUND'|'THROTTLING'|'ACCESS_DENIED'|'INTERNAL_SERVER' $errorCode
 * @property string $message
 */
class BatchGetEventError extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     errorCode: 'RESOURCE_NOT_FOUND'|'THROTTLING'|'ACCESS_DENIED'|'INTERNAL_SERVER',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
