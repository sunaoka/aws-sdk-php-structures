<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Verb
 * @property string|null $Resource
 * @property string|null $Namespace
 * @property bool|null $Allowed
 */
class KubernetesPermissionCheckedDetails extends Shape
{
    /**
     * @param array{
     *     Verb?: string|null,
     *     Resource?: string|null,
     *     Namespace?: string|null,
     *     Allowed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
