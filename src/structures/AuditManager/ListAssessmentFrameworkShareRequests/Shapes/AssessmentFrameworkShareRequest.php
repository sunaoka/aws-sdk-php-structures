<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentFrameworkShareRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $frameworkId
 * @property string $frameworkName
 * @property string $frameworkDescription
 * @property 'ACTIVE'|'REPLICATING'|'SHARED'|'EXPIRING'|'FAILED'|'EXPIRED'|'DECLINED'|'REVOKED' $status
 * @property string $sourceAccount
 * @property string $destinationAccount
 * @property string $destinationRegion
 * @property \Aws\Api\DateTimeResult $expirationTime
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdated
 * @property string $comment
 * @property int $standardControlsCount
 * @property int $customControlsCount
 * @property string $complianceType
 */
class AssessmentFrameworkShareRequest extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     frameworkId?: string,
     *     frameworkName?: string,
     *     frameworkDescription?: string,
     *     status?: 'ACTIVE'|'REPLICATING'|'SHARED'|'EXPIRING'|'FAILED'|'EXPIRED'|'DECLINED'|'REVOKED',
     *     sourceAccount?: string,
     *     destinationAccount?: string,
     *     destinationRegion?: string,
     *     expirationTime?: \Aws\Api\DateTimeResult,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdated?: \Aws\Api\DateTimeResult,
     *     comment?: string,
     *     standardControlsCount?: int,
     *     customControlsCount?: int,
     *     complianceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
