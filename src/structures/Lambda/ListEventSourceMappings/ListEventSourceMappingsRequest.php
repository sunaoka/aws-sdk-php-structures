<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 * @property string $FunctionName
 * @property string $Marker
 * @property int $MaxItems
 */
class ListEventSourceMappingsRequest extends Request
{
    /**
     * @param array{
     *     EventSourceArn?: string,
     *     FunctionName?: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
