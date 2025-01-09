<?php

namespace Sunaoka\Aws\Structures\AppFabric\ListAppAuthorizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tenantIdentifier
 * @property string $tenantDisplayName
 */
class Tenant extends Shape
{
    /**
     * @param array{
     *     tenantIdentifier: string,
     *     tenantDisplayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
