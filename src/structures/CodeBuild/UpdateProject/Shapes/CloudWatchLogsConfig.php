<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property string $groupName
 * @property string $streamName
 */
class CloudWatchLogsConfig extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'DISABLED',
     *     groupName?: string,
     *     streamName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
