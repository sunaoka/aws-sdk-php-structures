<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3' $destinationType
 * @property string $destination
 */
class AssessmentReportsDestination extends Shape
{
    /**
     * @param array{
     *     destinationType?: 'S3',
     *     destination?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
