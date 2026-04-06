<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeADAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssessmentId
 */
class DescribeADAssessmentRequest extends Request
{
    /**
     * @param array{AssessmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
