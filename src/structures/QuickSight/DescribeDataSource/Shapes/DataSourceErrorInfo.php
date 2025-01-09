<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED'|'COPY_SOURCE_NOT_FOUND'|'TIMEOUT'|'ENGINE_VERSION_NOT_SUPPORTED'|'UNKNOWN_HOST'|'GENERIC_SQL_FAILURE'|'CONFLICT'|'UNKNOWN' $Type
 * @property string $Message
 */
class DataSourceErrorInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'ACCESS_DENIED'|'COPY_SOURCE_NOT_FOUND'|'TIMEOUT'|'ENGINE_VERSION_NOT_SUPPORTED'|'UNKNOWN_HOST'|'GENERIC_SQL_FAILURE'|'CONFLICT'|'UNKNOWN',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
