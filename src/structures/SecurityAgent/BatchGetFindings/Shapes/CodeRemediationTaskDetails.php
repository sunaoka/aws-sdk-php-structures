<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repoName
 * @property string|null $codeDiffLink
 * @property string|null $pullRequestLink
 */
class CodeRemediationTaskDetails extends Shape
{
    /**
     * @param array{
     *     repoName?: string|null,
     *     codeDiffLink?: string|null,
     *     pullRequestLink?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
