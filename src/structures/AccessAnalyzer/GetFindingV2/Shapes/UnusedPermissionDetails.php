<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UnusedAction> $actions
 * @property string $serviceNamespace
 * @property \Aws\Api\DateTimeResult $lastAccessed
 */
class UnusedPermissionDetails extends Shape
{
    /**
     * @param array{
     *     actions?: list<UnusedAction>,
     *     serviceNamespace: string,
     *     lastAccessed?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
