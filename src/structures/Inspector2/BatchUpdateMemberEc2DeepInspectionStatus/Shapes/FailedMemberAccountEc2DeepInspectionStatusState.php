<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchUpdateMemberEc2DeepInspectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED' $ec2ScanStatus
 * @property string $errorMessage
 */
class FailedMemberAccountEc2DeepInspectionStatusState extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     ec2ScanStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED',
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
