<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $assessmentRunArns
 */
class DescribeAssessmentRunsRequest extends Request
{
    /**
     * @param array{assessmentRunArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
