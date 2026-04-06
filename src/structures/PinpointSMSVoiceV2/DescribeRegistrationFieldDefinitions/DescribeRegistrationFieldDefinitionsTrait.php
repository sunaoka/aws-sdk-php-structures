<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationFieldDefinitions;

trait DescribeRegistrationFieldDefinitionsTrait
{
    /**
     * @param DescribeRegistrationFieldDefinitionsRequest $args
     * @return DescribeRegistrationFieldDefinitionsResponse
     */
    public function describeRegistrationFieldDefinitions(DescribeRegistrationFieldDefinitionsRequest $args)
    {
        $result = parent::describeRegistrationFieldDefinitions($args->toArray());
        return new DescribeRegistrationFieldDefinitionsResponse($result->toArray());
    }
}
