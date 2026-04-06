<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccountToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $key
 * @property string $name
 */
class ServiceAccountTokenSummaryWithKey extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     key: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
