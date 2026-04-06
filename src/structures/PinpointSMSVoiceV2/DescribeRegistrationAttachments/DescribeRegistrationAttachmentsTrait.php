<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationAttachments;

trait DescribeRegistrationAttachmentsTrait
{
    /**
     * @param DescribeRegistrationAttachmentsRequest $args
     * @return DescribeRegistrationAttachmentsResponse
     */
    public function describeRegistrationAttachments(DescribeRegistrationAttachmentsRequest $args)
    {
        $result = parent::describeRegistrationAttachments($args->toArray());
        return new DescribeRegistrationAttachmentsResponse($result->toArray());
    }
}
