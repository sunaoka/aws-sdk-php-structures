<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PollForJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $revision
 * @property ArtifactLocation $location
 */
class Artifact extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     revision?: string,
     *     location?: ArtifactLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
