<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $assessmentTargetArns
 */
class DescribeAssessmentTargetsRequest extends Request
{
    /**
     * @param array{assessmentTargetArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
