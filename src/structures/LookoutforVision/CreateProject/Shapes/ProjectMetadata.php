<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProjectArn
 * @property string|null $ProjectName
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 */
class ProjectMetadata extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string|null,
     *     ProjectName?: string|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
