<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespaceName
 * @property string|null $scheduledActionName
 */
class ScheduledActionAssociation extends Shape
{
    /**
     * @param array{
     *     namespaceName?: string|null,
     *     scheduledActionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
