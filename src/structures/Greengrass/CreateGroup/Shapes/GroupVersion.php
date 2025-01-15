<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectorDefinitionVersionArn
 * @property string|null $CoreDefinitionVersionArn
 * @property string|null $DeviceDefinitionVersionArn
 * @property string|null $FunctionDefinitionVersionArn
 * @property string|null $LoggerDefinitionVersionArn
 * @property string|null $ResourceDefinitionVersionArn
 * @property string|null $SubscriptionDefinitionVersionArn
 */
class GroupVersion extends Shape
{
    /**
     * @param array{
     *     ConnectorDefinitionVersionArn?: string|null,
     *     CoreDefinitionVersionArn?: string|null,
     *     DeviceDefinitionVersionArn?: string|null,
     *     FunctionDefinitionVersionArn?: string|null,
     *     LoggerDefinitionVersionArn?: string|null,
     *     ResourceDefinitionVersionArn?: string|null,
     *     SubscriptionDefinitionVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
