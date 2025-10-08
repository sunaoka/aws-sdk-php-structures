<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationSectionDefinitions;

trait DescribeRegistrationSectionDefinitionsTrait
{
    /**
     * @param DescribeRegistrationSectionDefinitionsRequest $args
     * @return DescribeRegistrationSectionDefinitionsResponse
     */
    public function describeRegistrationSectionDefinitions(DescribeRegistrationSectionDefinitionsRequest $args)
    {
        $result = parent::describeRegistrationSectionDefinitions($args->toArray());
        return new DescribeRegistrationSectionDefinitionsResponse($result->toArray());
    }
}
