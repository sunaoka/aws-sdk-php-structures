<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $environmentId
 */
class ProjectAppConfigResourceConfig extends Shape
{
    /**
     * @param array{
     *     applicationId?: string,
     *     environmentId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
