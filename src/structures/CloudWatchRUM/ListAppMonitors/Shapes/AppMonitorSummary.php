<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListAppMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $Created
 * @property string|null $LastModified
 * @property 'CREATED'|'DELETING'|'ACTIVE'|null $State
 * @property 'Web'|'Android'|'iOS'|null $Platform
 */
class AppMonitorSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     Created?: string|null,
     *     LastModified?: string|null,
     *     State?: 'CREATED'|'DELETING'|'ACTIVE'|null,
     *     Platform?: 'Web'|'Android'|'iOS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
