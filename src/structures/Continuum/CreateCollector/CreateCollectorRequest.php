<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_COLLECTOR'|null $type
 * @property Shapes\KubernetesClusterRoleConfiguration|null $kubernetesClusterRole
 * @property string|null $clientToken
 */
class CreateCollectorRequest extends Request
{
    /**
     * @param array{
     *     type?: 'AWS_COLLECTOR'|null,
     *     kubernetesClusterRole?: Shapes\KubernetesClusterRoleConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
