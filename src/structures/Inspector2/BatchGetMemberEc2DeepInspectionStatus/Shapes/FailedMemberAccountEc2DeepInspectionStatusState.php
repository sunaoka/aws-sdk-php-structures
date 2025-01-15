<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetMemberEc2DeepInspectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null $ec2ScanStatus
 * @property string|null $errorMessage
 */
class FailedMemberAccountEc2DeepInspectionStatusState extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     ec2ScanStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'SUSPENDING'|'SUSPENDED'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
