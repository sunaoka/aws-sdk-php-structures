<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSourceName
 * @property OpenSearchResourceStatus|null $status
 */
class OpenSearchDataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceName?: string|null,
     *     status?: OpenSearchResourceStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
