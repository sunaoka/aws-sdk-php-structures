<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $assessmentName
 * @property string|null $assessmentId
 * @property 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE'|null $status
 * @property string|null $roleArn
 * @property 'PROCESS_OWNER'|'RESOURCE_OWNER'|null $roleType
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property string|null $controlSetId
 * @property string|null $comment
 * @property string|null $createdBy
 */
class Delegation extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     assessmentName?: string|null,
     *     assessmentId?: string|null,
     *     status?: 'IN_PROGRESS'|'UNDER_REVIEW'|'COMPLETE'|null,
     *     roleArn?: string|null,
     *     roleType?: 'PROCESS_OWNER'|'RESOURCE_OWNER'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null,
     *     controlSetId?: string|null,
     *     comment?: string|null,
     *     createdBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
