<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 * @property 'VALIDATION'|'SERVICE_QUOTA_EXCEEDED'|'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'THROTTLING'|'INTERNAL_SERVICE_EXCEPTION'|'CANCELLED'|'USER_RECOVERABLE' $errorCategory
 */
class DataViewErrorInfo extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string,
     *     errorCategory?: 'VALIDATION'|'SERVICE_QUOTA_EXCEEDED'|'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'THROTTLING'|'INTERNAL_SERVICE_EXCEPTION'|'CANCELLED'|'USER_RECOVERABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
