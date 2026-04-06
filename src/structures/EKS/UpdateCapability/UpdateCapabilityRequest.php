<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $capabilityName
 * @property string|null $roleArn
 * @property Shapes\UpdateCapabilityConfiguration|null $configuration
 * @property string|null $clientRequestToken
 * @property 'RETAIN'|null $deletePropagationPolicy
 */
class UpdateCapabilityRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     capabilityName: string,
     *     roleArn?: string|null,
     *     configuration?: Shapes\UpdateCapabilityConfiguration|null,
     *     clientRequestToken?: string|null,
     *     deletePropagationPolicy?: 'RETAIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
