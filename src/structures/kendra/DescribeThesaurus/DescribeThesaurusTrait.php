<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeThesaurus;

trait DescribeThesaurusTrait
{
    /**
     * @param DescribeThesaurusRequest $args
     * @return DescribeThesaurusResponse
     */
    public function describeThesaurus(DescribeThesaurusRequest $args)
    {
        $result = parent::describeThesaurus($args->toArray());
        return new DescribeThesaurusResponse($result->toArray());
    }
}
