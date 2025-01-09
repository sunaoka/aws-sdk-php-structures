<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $assessmentTemplateArns
 */
class DescribeAssessmentTemplatesRequest extends Request
{
    /**
     * @param array{assessmentTemplateArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
