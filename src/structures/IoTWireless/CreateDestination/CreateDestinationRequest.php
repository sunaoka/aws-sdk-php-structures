<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'RuleName'|'MqttTopic' $ExpressionType
 * @property string $Expression
 * @property string $Description
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 */
class CreateDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExpressionType: 'RuleName'|'MqttTopic',
     *     Expression: string,
     *     Description?: string,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
