<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCisScanResultDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $checkDescription
 * @property string|null $checkId
 * @property string|null $findingArn
 * @property 'LEVEL_1'|'LEVEL_2'|null $level
 * @property string|null $platform
 * @property string|null $remediation
 * @property string $scanArn
 * @property 'PASSED'|'FAILED'|'SKIPPED'|null $status
 * @property string|null $statusReason
 * @property string|null $targetResourceId
 * @property string|null $title
 */
class CisScanResultDetails extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     checkDescription?: string|null,
     *     checkId?: string|null,
     *     findingArn?: string|null,
     *     level?: 'LEVEL_1'|'LEVEL_2'|null,
     *     platform?: string|null,
     *     remediation?: string|null,
     *     scanArn: string,
     *     status?: 'PASSED'|'FAILED'|'SKIPPED'|null,
     *     statusReason?: string|null,
     *     targetResourceId?: string|null,
     *     title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
