<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     displayName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
