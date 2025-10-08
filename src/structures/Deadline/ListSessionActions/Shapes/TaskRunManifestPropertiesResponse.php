<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputManifestPath
 * @property string|null $outputManifestHash
 */
class TaskRunManifestPropertiesResponse extends Shape
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
