<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $capabilityName
 * @property string|null $arn
 * @property string|null $clusterName
 * @property 'ACK'|'KRO'|'ARGOCD'|null $type
 * @property string|null $roleArn
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'ACTIVE'|'DEGRADED'|null $status
 * @property string|null $version
 * @property CapabilityConfigurationResponse|null $configuration
 * @property array<string, string>|null $tags
 * @property CapabilityHealth|null $health
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property 'RETAIN'|null $deletePropagationPolicy
 */
class Capability extends Shape
{
    /**
     * @param array{
     *     capabilityName?: string|null,
     *     arn?: string|null,
     *     clusterName?: string|null,
     *     type?: 'ACK'|'KRO'|'ARGOCD'|null,
     *     roleArn?: string|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETE_FAILED'|'ACTIVE'|'DEGRADED'|null,
     *     version?: string|null,
     *     configuration?: CapabilityConfigurationResponse|null,
     *     tags?: array<string, string>|null,
     *     health?: CapabilityHealth|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     deletePropagationPolicy?: 'RETAIN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
