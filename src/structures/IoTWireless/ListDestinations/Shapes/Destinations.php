<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'RuleName'|'MqttTopic'|null $ExpressionType
 * @property string|null $Expression
 * @property string|null $Description
 * @property string|null $RoleArn
 */
class Destinations extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     ExpressionType?: 'RuleName'|'MqttTopic'|null,
     *     Expression?: string|null,
     *     Description?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
