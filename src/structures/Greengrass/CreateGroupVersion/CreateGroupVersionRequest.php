<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroupVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string|null $ConnectorDefinitionVersionArn
 * @property string|null $CoreDefinitionVersionArn
 * @property string|null $DeviceDefinitionVersionArn
 * @property string|null $FunctionDefinitionVersionArn
 * @property string $GroupId
 * @property string|null $LoggerDefinitionVersionArn
 * @property string|null $ResourceDefinitionVersionArn
 * @property string|null $SubscriptionDefinitionVersionArn
 */
class CreateGroupVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     ConnectorDefinitionVersionArn?: string|null,
     *     CoreDefinitionVersionArn?: string|null,
     *     DeviceDefinitionVersionArn?: string|null,
     *     FunctionDefinitionVersionArn?: string|null,
     *     GroupId: string,
     *     LoggerDefinitionVersionArn?: string|null,
     *     ResourceDefinitionVersionArn?: string|null,
     *     SubscriptionDefinitionVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
