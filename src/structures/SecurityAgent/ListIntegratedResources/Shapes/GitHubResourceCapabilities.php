<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $leaveComments
 * @property bool|null $remediateCode
 */
class GitHubResourceCapabilities extends Shape
{
    /**
     * @param array{
     *     leaveComments?: bool|null,
     *     remediateCode?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
