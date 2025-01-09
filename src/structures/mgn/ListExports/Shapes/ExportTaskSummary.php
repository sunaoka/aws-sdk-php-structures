<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $applicationsCount
 * @property int $serversCount
 * @property int $wavesCount
 */
class ExportTaskSummary extends Shape
{
    /**
     * @param array{
     *     applicationsCount?: int,
     *     serversCount?: int,
     *     wavesCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
