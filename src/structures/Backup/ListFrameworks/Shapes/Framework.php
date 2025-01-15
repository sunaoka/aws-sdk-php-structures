<?php

namespace Sunaoka\Aws\Structures\Backup\ListFrameworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FrameworkName
 * @property string|null $FrameworkArn
 * @property string|null $FrameworkDescription
 * @property int|null $NumberOfControls
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $DeploymentStatus
 */
class Framework extends Shape
{
    /**
     * @param array{
     *     FrameworkName?: string|null,
     *     FrameworkArn?: string|null,
     *     FrameworkDescription?: string|null,
     *     NumberOfControls?: int|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     DeploymentStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
