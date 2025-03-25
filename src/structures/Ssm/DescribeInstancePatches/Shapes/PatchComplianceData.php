<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $KBId
 * @property string $Classification
 * @property string $Severity
 * @property 'INSTALLED'|'INSTALLED_OTHER'|'INSTALLED_PENDING_REBOOT'|'INSTALLED_REJECTED'|'MISSING'|'NOT_APPLICABLE'|'FAILED'|'AVAILABLE_SECURITY_UPDATE' $State
 * @property \Aws\Api\DateTimeResult $InstalledTime
 * @property string|null $CVEIds
 */
class PatchComplianceData extends Shape
{
    /**
     * @param array{
     *     Title: string,
     *     KBId: string,
     *     Classification: string,
     *     Severity: string,
     *     State: 'INSTALLED'|'INSTALLED_OTHER'|'INSTALLED_PENDING_REBOOT'|'INSTALLED_REJECTED'|'MISSING'|'NOT_APPLICABLE'|'FAILED'|'AVAILABLE_SECURITY_UPDATE',
     *     InstalledTime: \Aws\Api\DateTimeResult,
     *     CVEIds?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
