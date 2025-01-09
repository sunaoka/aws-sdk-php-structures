<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $assessmentName
 * @property string $assessmentId
 * @property 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE' $status
 * @property string $roleArn
 * @property 'PROCESS_OWNER'|'RESOURCE_OWNER' $roleType
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdated
 * @property string $controlSetId
 * @property string $comment
 * @property string $createdBy
 */
class Delegation extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     assessmentName?: string,
     *     assessmentId?: string,
     *     status?: 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE',
     *     roleArn?: string,
     *     roleType?: 'PROCESS_OWNER'|'RESOURCE_OWNER',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdated?: \Aws\Api\DateTimeResult,
     *     controlSetId?: string,
     *     comment?: string,
     *     createdBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
