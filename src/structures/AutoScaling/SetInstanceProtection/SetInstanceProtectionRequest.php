<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SetInstanceProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 * @property string $AutoScalingGroupName
 * @property bool $ProtectedFromScaleIn
 */
class SetInstanceProtectionRequest extends Request
{
    /**
     * @param array{
     *     InstanceIds: list<string>,
     *     AutoScalingGroupName: string,
     *     ProtectedFromScaleIn: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
