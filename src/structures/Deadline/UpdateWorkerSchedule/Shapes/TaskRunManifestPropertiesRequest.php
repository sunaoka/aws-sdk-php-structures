<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorkerSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputManifestPath
 * @property string|null $outputManifestHash
 */
class TaskRunManifestPropertiesRequest extends Shape
{
    /**
     * @param array{
     *     outputManifestPath?: string|null,
     *     outputManifestHash?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
