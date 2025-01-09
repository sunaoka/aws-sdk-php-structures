<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Verb
 * @property string $Resource
 * @property string $Namespace
 * @property bool $Allowed
 */
class KubernetesPermissionCheckedDetails extends Shape
{
    /**
     * @param array{
     *     Verb?: string,
     *     Resource?: string,
     *     Namespace?: string,
     *     Allowed?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
