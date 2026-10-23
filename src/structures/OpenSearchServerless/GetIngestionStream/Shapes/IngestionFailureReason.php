<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_ACCESS_DENIED'|'SOURCE_RESOURCE_NOT_FOUND'|'DESTINATION_ACCESS_DENIED'|'DESTINATION_RESOURCE_NOT_FOUND'|'INTERNAL_SERVER_ERROR'|null $code
 * @property string|null $message
 */
class IngestionFailureReason extends Shape
{
    /**
     * @param array{
     *     code?: 'SOURCE_ACCESS_DENIED'|'SOURCE_RESOURCE_NOT_FOUND'|'DESTINATION_ACCESS_DENIED'|'DESTINATION_RESOURCE_NOT_FOUND'|'INTERNAL_SERVER_ERROR'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
