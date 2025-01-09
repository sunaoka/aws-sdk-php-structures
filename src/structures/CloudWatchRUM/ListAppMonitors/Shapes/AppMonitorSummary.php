<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\ListAppMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Created
 * @property string $Id
 * @property string $LastModified
 * @property string $Name
 * @property 'CREATED'|'DELETING'|'ACTIVE' $State
 */
class AppMonitorSummary extends Shape
{
    /**
     * @param array{
     *     Created?: string,
     *     Id?: string,
     *     LastModified?: string,
     *     Name?: string,
     *     State?: 'CREATED'|'DELETING'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
