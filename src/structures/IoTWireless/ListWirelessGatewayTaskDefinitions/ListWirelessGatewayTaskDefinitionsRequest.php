<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListWirelessGatewayTaskDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 250> $MaxResults
 * @property string $NextToken
 * @property 'UPDATE' $TaskDefinitionType
 */
class ListWirelessGatewayTaskDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 250>,
     *     NextToken?: string,
     *     TaskDefinitionType?: 'UPDATE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
