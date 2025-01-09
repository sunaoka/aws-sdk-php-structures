<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingId
 * @property string $taskId
 * @property string $checkName
 * @property \Aws\Api\DateTimeResult $taskStartTime
 * @property \Aws\Api\DateTimeResult $findingTime
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW' $severity
 * @property NonCompliantResource $nonCompliantResource
 * @property list<RelatedResource> $relatedResources
 * @property string $reasonForNonCompliance
 * @property string $reasonForNonComplianceCode
 * @property bool $isSuppressed
 */
class AuditFinding extends Shape
{
    /**
     * @param array{
     *     findingId?: string,
     *     taskId?: string,
     *     checkName?: string,
     *     taskStartTime?: \Aws\Api\DateTimeResult,
     *     findingTime?: \Aws\Api\DateTimeResult,
     *     severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW',
     *     nonCompliantResource?: NonCompliantResource,
     *     relatedResources?: list<RelatedResource>,
     *     reasonForNonCompliance?: string,
     *     reasonForNonComplianceCode?: string,
     *     isSuppressed?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
