<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SamlConfiguration $configuration
 * @property 'CONFIGURED'|'NOT_CONFIGURED' $status
 */
class SamlAuthentication extends Shape
{
    /**
     * @param array{
     *     configuration?: SamlConfiguration,
     *     status: 'CONFIGURED'|'NOT_CONFIGURED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
