<?php

namespace Sunaoka\Aws\Structures\IoTWireless\CreateWirelessGatewayTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoCreateTasks
 * @property string $Name
 * @property Shapes\UpdateWirelessGatewayTaskCreate $Update
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateWirelessGatewayTaskDefinitionRequest extends Request
{
    /**
     * @param array{
     *     AutoCreateTasks: bool,
     *     Name?: string,
     *     Update?: Shapes\UpdateWirelessGatewayTaskCreate,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
