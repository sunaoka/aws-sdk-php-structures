<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyTemplates;

trait DescribeNotifyTemplatesTrait
{
    /**
     * @param DescribeNotifyTemplatesRequest $args
     * @return DescribeNotifyTemplatesResponse
     */
    public function describeNotifyTemplates(DescribeNotifyTemplatesRequest $args)
    {
        $result = parent::describeNotifyTemplates($args->toArray());
        return new DescribeNotifyTemplatesResponse($result->toArray());
    }
}
