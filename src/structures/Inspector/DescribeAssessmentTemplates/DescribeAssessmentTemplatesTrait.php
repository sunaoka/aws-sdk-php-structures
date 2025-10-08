<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentTemplates;

trait DescribeAssessmentTemplatesTrait
{
    /**
     * @param DescribeAssessmentTemplatesRequest $args
     * @return DescribeAssessmentTemplatesResponse
     */
    public function describeAssessmentTemplates(DescribeAssessmentTemplatesRequest $args)
    {
        $result = parent::describeAssessmentTemplates($args->toArray());
        return new DescribeAssessmentTemplatesResponse($result->toArray());
    }
}
