<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamlConfiguration|null $configuration
 * @property 'CONFIGURED'|'NOT_CONFIGURED' $status
 */
class SamlAuthentication extends Shape
{
    /**
     * @param array{
     *     configuration?: SamlConfiguration|null,
     *     status: 'CONFIGURED'|'NOT_CONFIGURED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
