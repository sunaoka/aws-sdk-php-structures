<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptOutLists;

trait DescribeOptOutListsTrait
{
    /**
     * @param DescribeOptOutListsRequest $args
     * @return DescribeOptOutListsResponse
     */
    public function describeOptOutLists(DescribeOptOutListsRequest $args)
    {
        $result = parent::describeOptOutLists($args->toArray());
        return new DescribeOptOutListsResponse($result->toArray());
    }
}
