<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListSignalCatalogNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'SENSOR'|'ACTUATOR'|'ATTRIBUTE'|'BRANCH'|'CUSTOM_STRUCT'|'CUSTOM_PROPERTY'|null $signalNodeType
 */
class ListSignalCatalogNodesRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     signalNodeType?: 'SENSOR'|'ACTUATOR'|'ATTRIBUTE'|'BRANCH'|'CUSTOM_STRUCT'|'CUSTOM_PROPERTY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
