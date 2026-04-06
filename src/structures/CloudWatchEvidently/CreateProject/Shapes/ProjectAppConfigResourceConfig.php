<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationId
 * @property string|null $environmentId
 */
class ProjectAppConfigResourceConfig extends Shape
{
    /**
     * @param array{
     *     applicationId?: string|null,
     *     environmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
