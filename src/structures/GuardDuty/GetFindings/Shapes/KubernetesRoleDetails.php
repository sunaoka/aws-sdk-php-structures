<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Kind
 * @property string $Name
 * @property string $Uid
 */
class KubernetesRoleDetails extends Shape
{
    /**
     * @param array{
     *     Kind?: string,
     *     Name?: string,
     *     Uid?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
