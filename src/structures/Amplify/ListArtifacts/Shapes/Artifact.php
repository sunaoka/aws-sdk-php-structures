<?php

namespace Sunaoka\Aws\Structures\Amplify\ListArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $artifactFileName
 * @property string $artifactId
 */
class Artifact extends Shape
{
    /**
     * @param array{
     *     artifactFileName: string,
     *     artifactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
