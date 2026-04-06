<?php

namespace Sunaoka\Aws\Structures\CodeStar\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $projectId
 * @property string|null $projectArn
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     projectId?: string|null,
     *     projectArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
