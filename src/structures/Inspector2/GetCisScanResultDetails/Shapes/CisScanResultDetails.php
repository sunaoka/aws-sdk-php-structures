<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $checkDescription
 * @property string $checkId
 * @property string $findingArn
 * @property 'LEVEL_1'|'LEVEL_2' $level
 * @property string $platform
 * @property string $remediation
 * @property string $scanArn
 * @property 'PASSED'|'FAILED'|'SKIPPED' $status
 * @property string $statusReason
 * @property string $targetResourceId
 * @property string $title
 */
class CisScanResultDetails extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     checkDescription?: string,
     *     checkId?: string,
     *     findingArn?: string,
     *     level?: 'LEVEL_1'|'LEVEL_2',
     *     platform?: string,
     *     remediation?: string,
     *     scanArn: string,
     *     status?: 'PASSED'|'FAILED'|'SKIPPED',
     *     statusReason?: string,
     *     targetResourceId?: string,
     *     title?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
