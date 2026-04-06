<?php

namespace Sunaoka\Aws\Structures\Mobile\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $projectId
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     projectId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
