<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoCreateTasks
 * @property string|null $Name
 * @property Shapes\UpdateWirelessGatewayTaskCreate|null $Update
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWirelessGatewayTaskDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AutoCreateTasks: bool,
     *     Name?: string|null,
     *     Update?: Shapes\UpdateWirelessGatewayTaskCreate|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
