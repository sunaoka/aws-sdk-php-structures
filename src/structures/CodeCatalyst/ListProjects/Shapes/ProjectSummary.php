<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $displayName
 * @property string $description
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     displayName?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
