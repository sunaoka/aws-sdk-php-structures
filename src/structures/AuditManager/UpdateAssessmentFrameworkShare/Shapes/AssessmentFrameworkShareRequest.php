<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFrameworkShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $frameworkId
 * @property string|null $frameworkName
 * @property string|null $frameworkDescription
 * @property 'ACTIVE'|'REPLICATING'|'SHARED'|'EXPIRING'|'FAILED'|'EXPIRED'|'DECLINED'|'REVOKED'|null $status
 * @property string|null $sourceAccount
 * @property string|null $destinationAccount
 * @property string|null $destinationRegion
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property string|null $comment
 * @property int|null $standardControlsCount
 * @property int|null $customControlsCount
 * @property string|null $complianceType
 */
class AssessmentFrameworkShareRequest extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     frameworkId?: string|null,
     *     frameworkName?: string|null,
     *     frameworkDescription?: string|null,
     *     status?: 'ACTIVE'|'REPLICATING'|'SHARED'|'EXPIRING'|'FAILED'|'EXPIRED'|'DECLINED'|'REVOKED'|null,
     *     sourceAccount?: string|null,
     *     destinationAccount?: string|null,
     *     destinationRegion?: string|null,
     *     expirationTime?: \Aws\Api\DateTimeResult|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null,
     *     comment?: string|null,
     *     standardControlsCount?: int|null,
     *     customControlsCount?: int|null,
     *     complianceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
