<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRunActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED_EXCEPTION'|'CONFLICT_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'THROTTLING_EXCEPTION'|'VALIDATION_EXCEPTION' $errorType
 * @property string|null $errorDetail
 */
class DataSourceErrorMessage extends Shape
{
    /**
     * @param array{
     *     errorType: 'ACCESS_DENIED_EXCEPTION'|'CONFLICT_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'THROTTLING_EXCEPTION'|'VALIDATION_EXCEPTION',
     *     errorDetail?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
