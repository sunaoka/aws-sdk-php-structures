<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoEnable
 */
class OrganizationKubernetesAuditLogsConfiguration extends Shape
{
    /**
     * @param array{AutoEnable: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
