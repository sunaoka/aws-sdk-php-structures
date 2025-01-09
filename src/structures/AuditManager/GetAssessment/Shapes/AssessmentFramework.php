<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property FrameworkMetadata $metadata
 * @property list<AssessmentControlSet> $controlSets
 */
class AssessmentFramework extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     metadata?: FrameworkMetadata,
     *     controlSets?: list<AssessmentControlSet>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
