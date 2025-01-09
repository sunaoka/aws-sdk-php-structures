<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectArn
 * @property string $ProjectName
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 */
class ProjectMetadata extends Shape
{
    /**
     * @param array{
     *     ProjectArn?: string,
     *     ProjectName?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
