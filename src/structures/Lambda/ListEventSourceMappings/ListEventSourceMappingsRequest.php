<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventSourceArn
 * @property string|null $FunctionName
 * @property string|null $Marker
 * @property int<1, 10000>|null $MaxItems
 */
class ListEventSourceMappingsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceArn?: string|null,
     *     FunctionName?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
