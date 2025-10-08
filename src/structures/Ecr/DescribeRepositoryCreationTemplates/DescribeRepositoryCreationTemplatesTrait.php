<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRepositoryCreationTemplates;

trait DescribeRepositoryCreationTemplatesTrait
{
    /**
     * @param DescribeRepositoryCreationTemplatesRequest $args
     * @return DescribeRepositoryCreationTemplatesResponse
     */
    public function describeRepositoryCreationTemplates(DescribeRepositoryCreationTemplatesRequest $args)
    {
        $result = parent::describeRepositoryCreationTemplates($args->toArray());
        return new DescribeRepositoryCreationTemplatesResponse($result->toArray());
    }
}
