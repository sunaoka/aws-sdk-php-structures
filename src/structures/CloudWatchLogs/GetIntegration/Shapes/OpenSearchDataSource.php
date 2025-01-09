<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceName
 * @property OpenSearchResourceStatus $status
 */
class OpenSearchDataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceName?: string,
     *     status?: OpenSearchResourceStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
