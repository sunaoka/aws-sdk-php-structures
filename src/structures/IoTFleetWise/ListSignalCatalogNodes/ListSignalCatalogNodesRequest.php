<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property 'SENSOR'|'ACTUATOR'|'ATTRIBUTE'|'BRANCH'|'CUSTOM_STRUCT'|'CUSTOM_PROPERTY' $signalNodeType
 */
class ListSignalCatalogNodesRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     signalNodeType?: 'SENSOR'|'ACTUATOR'|'ATTRIBUTE'|'BRANCH'|'CUSTOM_STRUCT'|'CUSTOM_PROPERTY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
