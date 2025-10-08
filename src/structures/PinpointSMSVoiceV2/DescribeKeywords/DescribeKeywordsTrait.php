<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeKeywords;

trait DescribeKeywordsTrait
{
    /**
     * @param DescribeKeywordsRequest $args
     * @return DescribeKeywordsResponse
     */
    public function describeKeywords(DescribeKeywordsRequest $args)
    {
        $result = parent::describeKeywords($args->toArray());
        return new DescribeKeywordsResponse($result->toArray());
    }
}
