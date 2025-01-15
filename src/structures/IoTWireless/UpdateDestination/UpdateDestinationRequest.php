<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'RuleName'|'MqttTopic'|null $ExpressionType
 * @property string|null $Expression
 * @property string|null $Description
 * @property string|null $RoleArn
 */
class UpdateDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExpressionType?: 'RuleName'|'MqttTopic'|null,
     *     Expression?: string|null,
     *     Description?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
