<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $projectId
 */
class ProjectInformation extends Shape
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
