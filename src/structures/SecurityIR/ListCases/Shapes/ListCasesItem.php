<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property string $title
 * @property string $caseArn
 * @property 'Security Incident'|'Investigation' $engagementType
 * @property 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed' $caseStatus
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $closedDate
 * @property 'AWS'|'Self' $resolverType
 * @property 'Customer'|'None' $pendingAction
 */
class ListCasesItem extends Shape
{
    /**
     * @param array{
     *     caseId: string,
     *     lastUpdatedDate?: \Aws\Api\DateTimeResult,
     *     title?: string,
     *     caseArn?: string,
     *     engagementType?: 'Security Incident'|'Investigation',
     *     caseStatus?: 'Submitted'|'Acknowledged'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'|'Ready to Close'|'Closed',
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     closedDate?: \Aws\Api\DateTimeResult,
     *     resolverType?: 'AWS'|'Self',
     *     pendingAction?: 'Customer'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
