<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $grafanaRole
 * @property string $id
 * @property string $isDisabled
 * @property string $name
 */
class ServiceAccountSummary extends Shape
{
    /**
     * @param array{
     *     grafanaRole: 'ADMIN'|'EDITOR'|'VIEWER',
     *     id: string,
     *     isDisabled: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
