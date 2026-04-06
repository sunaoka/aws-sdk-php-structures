<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capabilityName
 * @property string $clusterName
 * @property string|null $clientRequestToken
 * @property 'ACK'|'KRO'|'ARGOCD' $type
 * @property string $roleArn
 * @property Shapes\CapabilityConfigurationRequest|null $configuration
 * @property array<string, string>|null $tags
 * @property 'RETAIN' $deletePropagationPolicy
 */
class CreateCapabilityRequest extends Request
{
    /**
     * @param array{
     *     capabilityName: string,
     *     clusterName: string,
     *     clientRequestToken?: string|null,
     *     type: 'ACK'|'KRO'|'ARGOCD',
     *     roleArn: string,
     *     configuration?: Shapes\CapabilityConfigurationRequest|null,
     *     tags?: array<string, string>|null,
     *     deletePropagationPolicy: 'RETAIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
