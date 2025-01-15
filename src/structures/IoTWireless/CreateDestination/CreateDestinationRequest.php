<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'RuleName'|'MqttTopic' $ExpressionType
 * @property string $Expression
 * @property string|null $Description
 * @property string $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 */
class CreateDestinationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ExpressionType: 'RuleName'|'MqttTopic',
     *     Expression: string,
     *     Description?: string|null,
     *     RoleArn: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
