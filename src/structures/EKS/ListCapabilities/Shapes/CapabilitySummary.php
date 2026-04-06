<?php

namespace Sunaoka\Aws\Structures\EKS\ListCapabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $capabilityName
 * @property string|null $arn
 * @property 'ACK'|'KRO'|'ARGOCD'|null $type
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'ACTIVE'|'DEGRADED'|null $status
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class CapabilitySummary extends Shape
{
    /**
     * @param array{
     *     capabilityName?: string|null,
     *     arn?: string|null,
     *     type?: 'ACK'|'KRO'|'ARGOCD'|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'ACTIVE'|'DEGRADED'|null,
     *     version?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
