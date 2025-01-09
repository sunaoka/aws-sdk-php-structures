<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroupVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $ConnectorDefinitionVersionArn
 * @property string $CoreDefinitionVersionArn
 * @property string $DeviceDefinitionVersionArn
 * @property string $FunctionDefinitionVersionArn
 * @property string $GroupId
 * @property string $LoggerDefinitionVersionArn
 * @property string $ResourceDefinitionVersionArn
 * @property string $SubscriptionDefinitionVersionArn
 */
class CreateGroupVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     ConnectorDefinitionVersionArn?: string,
     *     CoreDefinitionVersionArn?: string,
     *     DeviceDefinitionVersionArn?: string,
     *     FunctionDefinitionVersionArn?: string,
     *     GroupId: string,
     *     LoggerDefinitionVersionArn?: string,
     *     ResourceDefinitionVersionArn?: string,
     *     SubscriptionDefinitionVersionArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
