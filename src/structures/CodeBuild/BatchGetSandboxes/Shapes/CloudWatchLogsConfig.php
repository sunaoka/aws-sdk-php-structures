<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property string|null $groupName
 * @property string|null $streamName
 */
class CloudWatchLogsConfig extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'DISABLED',
     *     groupName?: string|null,
     *     streamName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
