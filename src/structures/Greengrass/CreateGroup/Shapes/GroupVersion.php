<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectorDefinitionVersionArn
 * @property string $CoreDefinitionVersionArn
 * @property string $DeviceDefinitionVersionArn
 * @property string $FunctionDefinitionVersionArn
 * @property string $LoggerDefinitionVersionArn
 * @property string $ResourceDefinitionVersionArn
 * @property string $SubscriptionDefinitionVersionArn
 */
class GroupVersion extends Shape
{
    /**
     * @param array{
     *     ConnectorDefinitionVersionArn?: string,
     *     CoreDefinitionVersionArn?: string,
     *     DeviceDefinitionVersionArn?: string,
     *     FunctionDefinitionVersionArn?: string,
     *     LoggerDefinitionVersionArn?: string,
     *     ResourceDefinitionVersionArn?: string,
     *     SubscriptionDefinitionVersionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
