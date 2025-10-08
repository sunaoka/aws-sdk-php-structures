<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeAccountAttributes;

trait DescribeAccountAttributesTrait
{
    /**
     * @param DescribeAccountAttributesRequest $args
     * @return DescribeAccountAttributesResponse
     */
    public function describeAccountAttributes(DescribeAccountAttributesRequest $args)
    {
        $result = parent::describeAccountAttributes($args->toArray());
        return new DescribeAccountAttributesResponse($result->toArray());
    }
}
