<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED'|'COPY_SOURCE_NOT_FOUND'|'TIMEOUT'|'ENGINE_VERSION_NOT_SUPPORTED'|'UNKNOWN_HOST'|'GENERIC_SQL_FAILURE'|'CONFLICT'|'UNKNOWN'|null $Type
 * @property string|null $Message
 */
class DataSourceErrorInfo extends Shape
{
    /**
     * @param array{
     *     Type?: 'ACCESS_DENIED'|'COPY_SOURCE_NOT_FOUND'|'TIMEOUT'|'ENGINE_VERSION_NOT_SUPPORTED'|'UNKNOWN_HOST'|'GENERIC_SQL_FAILURE'|'CONFLICT'|'UNKNOWN'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
