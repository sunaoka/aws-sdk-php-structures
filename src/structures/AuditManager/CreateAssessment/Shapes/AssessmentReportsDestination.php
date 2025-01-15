<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|null $destinationType
 * @property string|null $destination
 */
class AssessmentReportsDestination extends Shape
{
    /**
     * @param array{
     *     destinationType?: 'S3'|null,
     *     destination?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
