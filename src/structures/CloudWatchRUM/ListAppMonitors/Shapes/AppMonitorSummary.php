<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListAppMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Created
 * @property string|null $Id
 * @property string|null $LastModified
 * @property string|null $Name
 * @property 'CREATED'|'DELETING'|'ACTIVE'|null $State
 */
class AppMonitorSummary extends Shape
{
    /**
     * @param array{
     *     Created?: string|null,
     *     Id?: string|null,
     *     LastModified?: string|null,
     *     Name?: string|null,
     *     State?: 'CREATED'|'DELETING'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
