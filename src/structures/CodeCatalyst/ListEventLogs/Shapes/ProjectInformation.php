<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListEventLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $projectId
 */
class ProjectInformation extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     projectId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
