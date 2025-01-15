<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property FrameworkMetadata|null $metadata
 * @property list<AssessmentControlSet>|null $controlSets
 */
class AssessmentFramework extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     metadata?: FrameworkMetadata|null,
     *     controlSets?: list<AssessmentControlSet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
