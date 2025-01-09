<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Uid
 * @property list<string> $Groups
 * @property list<string> $SessionName
 * @property ImpersonatedUser $ImpersonatedUser
 */
class KubernetesUserDetails extends Shape
{
    /**
     * @param array{
     *     Username?: string,
     *     Uid?: string,
     *     Groups?: list<string>,
     *     SessionName?: list<string>,
     *     ImpersonatedUser?: ImpersonatedUser
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
