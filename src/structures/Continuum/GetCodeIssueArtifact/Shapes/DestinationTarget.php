<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssueArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Target|null $s3
 * @property GitHubTarget|null $github
 */
class DestinationTarget extends Shape
{
    /**
     * @param array{
     *     s3?: S3Target|null,
     *     github?: GitHubTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
