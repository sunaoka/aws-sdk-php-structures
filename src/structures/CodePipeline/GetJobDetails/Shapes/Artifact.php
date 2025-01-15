<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $revision
 * @property ArtifactLocation|null $location
 */
class Artifact extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     revision?: string|null,
     *     location?: ArtifactLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
