<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataSourceRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorDetail
 * @property 'ACCESS_DENIED_EXCEPTION'|'CONFLICT_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'THROTTLING_EXCEPTION'|'VALIDATION_EXCEPTION' $errorType
 */
class DataSourceErrorMessage extends Shape
{
    /**
     * @param array{
     *     errorDetail?: string,
     *     errorType: 'ACCESS_DENIED_EXCEPTION'|'CONFLICT_EXCEPTION'|'INTERNAL_SERVER_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'SERVICE_QUOTA_EXCEEDED_EXCEPTION'|'THROTTLING_EXCEPTION'|'VALIDATION_EXCEPTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
