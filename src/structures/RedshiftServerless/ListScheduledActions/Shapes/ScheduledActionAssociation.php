<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespaceName
 * @property string $scheduledActionName
 */
class ScheduledActionAssociation extends Shape
{
    /**
     * @param array{
     *     namespaceName?: string,
     *     scheduledActionName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
