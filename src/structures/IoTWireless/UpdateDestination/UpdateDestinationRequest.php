<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'RuleName'|'MqttTopic' $ExpressionType
 * @property string $Expression
 * @property string $Description
 * @property string $RoleArn
 */
class UpdateDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExpressionType?: 'RuleName'|'MqttTopic',
     *     Expression?: string,
     *     Description?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
