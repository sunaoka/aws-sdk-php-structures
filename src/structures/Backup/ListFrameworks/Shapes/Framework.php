<?php

namespace Sunaoka\Aws\Structures\Backup\ListFrameworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FrameworkName
 * @property string $FrameworkArn
 * @property string $FrameworkDescription
 * @property int $NumberOfControls
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $DeploymentStatus
 */
class Framework extends Shape
{
    /**
     * @param array{
     *     FrameworkName?: string,
     *     FrameworkArn?: string,
     *     FrameworkDescription?: string,
     *     NumberOfControls?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     DeploymentStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
