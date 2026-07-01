<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAccountVpcEncryptionControl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default-state'|'transitions-in-progress'|'transitions-partially-successful'|'transitions-successful'|'transitions-failed'|null $State
 * @property 'unmanaged'|'attempt-monitor'|'attempt-enforce'|null $Mode
 * @property AccountVpcEncryptionControlExclusions|null $Exclusions
 * @property 'account'|'declarative-policy'|null $ManagedBy
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTimestamp
 */
class AccountVpcEncryptionControl extends Shape
{
    /**
     * @param array{
     *     State?: 'default-state'|'transitions-in-progress'|'transitions-partially-successful'|'transitions-successful'|'transitions-failed'|null,
     *     Mode?: 'unmanaged'|'attempt-monitor'|'attempt-enforce'|null,
     *     Exclusions?: AccountVpcEncryptionControlExclusions|null,
     *     ManagedBy?: 'account'|'declarative-policy'|null,
     *     LastUpdateTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
