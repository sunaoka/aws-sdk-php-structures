<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions;

trait DescribeRegistrationTypeDefinitionsTrait
{
    /**
     * @param DescribeRegistrationTypeDefinitionsRequest $args
     * @return DescribeRegistrationTypeDefinitionsResponse
     */
    public function describeRegistrationTypeDefinitions(DescribeRegistrationTypeDefinitionsRequest $args)
    {
        $result = parent::describeRegistrationTypeDefinitions($args->toArray());
        return new DescribeRegistrationTypeDefinitionsResponse($result->toArray());
    }
}
