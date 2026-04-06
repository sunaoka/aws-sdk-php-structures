<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UnusedAction>|null $actions
 * @property string $serviceNamespace
 * @property \Aws\Api\DateTimeResult|null $lastAccessed
 */
class UnusedPermissionDetails extends Shape
{
    /**
     * @param array{
     *     actions?: list<UnusedAction>|null,
     *     serviceNamespace: string,
     *     lastAccessed?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
