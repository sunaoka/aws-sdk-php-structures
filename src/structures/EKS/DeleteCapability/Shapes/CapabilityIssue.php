<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccessDenied'|'ClusterUnreachable'|null $code
 * @property string|null $message
 */
class CapabilityIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'AccessDenied'|'ClusterUnreachable'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
