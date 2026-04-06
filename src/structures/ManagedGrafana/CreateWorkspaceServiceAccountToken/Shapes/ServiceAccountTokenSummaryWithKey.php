<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccountToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $key
 */
class ServiceAccountTokenSummaryWithKey extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
