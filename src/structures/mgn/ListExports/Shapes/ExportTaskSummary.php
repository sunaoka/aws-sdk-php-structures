<?php

namespace Sunaoka\Aws\Structures\mgn\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $applicationsCount
 * @property int<0, max> $serversCount
 * @property int<0, max> $wavesCount
 */
class ExportTaskSummary extends Shape
{
    /**
     * @param array{
     *     applicationsCount?: int<0, max>,
     *     serversCount?: int<0, max>,
     *     wavesCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
