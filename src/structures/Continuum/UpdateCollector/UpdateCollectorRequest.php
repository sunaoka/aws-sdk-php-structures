<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateCollector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectorId
 * @property string|null $name
 * @property Shapes\KubernetesClusterRoleUpdate|null $kubernetesClusterRole
 */
class UpdateCollectorRequest extends Request
{
    /**
     * @param array{
     *     collectorId: string,
     *     name?: string|null,
     *     kubernetesClusterRole?: Shapes\KubernetesClusterRoleUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
