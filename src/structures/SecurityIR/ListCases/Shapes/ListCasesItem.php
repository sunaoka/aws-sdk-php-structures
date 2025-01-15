<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property string|null $title
 * @property string|null $caseArn
 * @property 'Security Incident'|'Investigation'|null $engagementType
 * @property 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed'|null $caseStatus
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $closedDate
 * @property 'AWS'|'Self'|null $resolverType
 * @property 'Customer'|'None'|null $pendingAction
 */
class ListCasesItem extends Shape
{
    /**
     * @param array{
     *     caseId: string,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     title?: string|null,
     *     caseArn?: string|null,
     *     engagementType?: 'Security Incident'|'Investigation'|null,
     *     caseStatus?: 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed'|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     closedDate?: \Aws\Api\DateTimeResult|null,
     *     resolverType?: 'AWS'|'Self'|null,
     *     pendingAction?: 'Customer'|'None'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
