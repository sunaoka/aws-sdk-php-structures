<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $serversCount
 * @property int<0, max>|null $applicationsCount
 * @property int<0, max>|null $wavesCount
 */
class ExportTaskSummary extends Shape
{
    /**
     * @param array{
     *     serversCount?: int<0, max>|null,
     *     applicationsCount?: int<0, max>|null,
     *     wavesCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
