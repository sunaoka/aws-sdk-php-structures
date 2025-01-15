<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 250>|null $MaxResults
 * @property string|null $NextToken
 * @property 'UPDATE'|null $TaskDefinitionType
 */
class ListWirelessGatewayTaskDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 250>|null,
     *     NextToken?: string|null,
     *     TaskDefinitionType?: 'UPDATE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
