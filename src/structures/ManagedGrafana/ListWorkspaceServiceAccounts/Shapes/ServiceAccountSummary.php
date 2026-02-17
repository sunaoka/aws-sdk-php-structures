<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $isDisabled
 * @property 'ADMIN'|'EDITOR'|'VIEWER' $grafanaRole
 */
class ServiceAccountSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     isDisabled: string,
     *     grafanaRole: 'ADMIN'|'EDITOR'|'VIEWER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
