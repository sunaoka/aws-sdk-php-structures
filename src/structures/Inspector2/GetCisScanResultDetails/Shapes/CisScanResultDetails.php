<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanArn
 * @property string|null $accountId
 * @property string|null $targetResourceId
 * @property string|null $platform
 * @property 'PASSED'|'FAILED'|'SKIPPED'|null $status
 * @property string|null $statusReason
 * @property string|null $checkId
 * @property string|null $title
 * @property string|null $checkDescription
 * @property string|null $remediation
 * @property 'LEVEL_1'|'LEVEL_2'|null $level
 * @property string|null $findingArn
 */
class CisScanResultDetails extends Shape
{
    /**
     * @param array{
     *     scanArn: string,
     *     accountId?: string|null,
     *     targetResourceId?: string|null,
     *     platform?: string|null,
     *     status?: 'PASSED'|'FAILED'|'SKIPPED'|null,
     *     statusReason?: string|null,
     *     checkId?: string|null,
     *     title?: string|null,
     *     checkDescription?: string|null,
     *     remediation?: string|null,
     *     level?: 'LEVEL_1'|'LEVEL_2'|null,
     *     findingArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
