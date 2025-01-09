<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 */
class DescribeAppAssessmentRequest extends Request
{
    /**
     * @param array{assessmentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
