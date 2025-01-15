<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $findingId
 * @property string|null $taskId
 * @property string|null $checkName
 * @property \Aws\Api\DateTimeResult|null $taskStartTime
 * @property \Aws\Api\DateTimeResult|null $findingTime
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|null $severity
 * @property NonCompliantResource|null $nonCompliantResource
 * @property list<RelatedResource>|null $relatedResources
 * @property string|null $reasonForNonCompliance
 * @property string|null $reasonForNonComplianceCode
 * @property bool|null $isSuppressed
 */
class AuditFinding extends Shape
{
    /**
     * @param array{
     *     findingId?: string|null,
     *     taskId?: string|null,
     *     checkName?: string|null,
     *     taskStartTime?: \Aws\Api\DateTimeResult|null,
     *     findingTime?: \Aws\Api\DateTimeResult|null,
     *     severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|null,
     *     nonCompliantResource?: NonCompliantResource|null,
     *     relatedResources?: list<RelatedResource>|null,
     *     reasonForNonCompliance?: string|null,
     *     reasonForNonComplianceCode?: string|null,
     *     isSuppressed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
