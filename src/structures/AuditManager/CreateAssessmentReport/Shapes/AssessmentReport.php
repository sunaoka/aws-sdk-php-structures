<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $awsAccountId
 * @property string|null $assessmentId
 * @property string|null $assessmentName
 * @property string|null $author
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 */
class AssessmentReport extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     awsAccountId?: string|null,
     *     assessmentId?: string|null,
     *     assessmentName?: string|null,
     *     author?: string|null,
     *     status?: 'COMPLETE'|'IN_PROGRESS'|'FAILED'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
