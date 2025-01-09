<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $badgeEnabled
 * @property string $badgeRequestUrl
 */
class ProjectBadge extends Shape
{
    /**
     * @param array{
     *     badgeEnabled?: bool,
     *     badgeRequestUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
