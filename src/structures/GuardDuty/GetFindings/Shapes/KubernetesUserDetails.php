<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property string|null $Uid
 * @property list<string>|null $Groups
 * @property list<string>|null $SessionName
 */
class KubernetesUserDetails extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Uid?: string|null,
     *     Groups?: list<string>|null,
     *     SessionName?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
