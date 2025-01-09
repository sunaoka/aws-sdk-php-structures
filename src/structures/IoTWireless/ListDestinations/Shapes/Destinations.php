<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'RuleName'|'MqttTopic' $ExpressionType
 * @property string $Expression
 * @property string $Description
 * @property string $RoleArn
 */
class Destinations extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     ExpressionType?: 'RuleName'|'MqttTopic',
     *     Expression?: string,
     *     Description?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
