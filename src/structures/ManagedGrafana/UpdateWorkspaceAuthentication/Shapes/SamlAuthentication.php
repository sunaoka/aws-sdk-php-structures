<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONFIGURED'|'NOT_CONFIGURED' $status
 * @property SamlConfiguration|null $configuration
 */
class SamlAuthentication extends Shape
{
    /**
     * @param array{
     *     status: 'CONFIGURED'|'NOT_CONFIGURED',
     *     configuration?: SamlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
