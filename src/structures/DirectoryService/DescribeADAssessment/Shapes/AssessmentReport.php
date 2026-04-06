<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeADAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainControllerIp
 * @property list<AssessmentValidation>|null $Validations
 */
class AssessmentReport extends Shape
{
    /**
     * @param array{
     *     DomainControllerIp?: string|null,
     *     Validations?: list<AssessmentValidation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
