<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $badgeEnabled
 * @property string|null $badgeRequestUrl
 */
class ProjectBadge extends Shape
{
    /**
     * @param array{
     *     badgeEnabled?: bool|null,
     *     badgeRequestUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
