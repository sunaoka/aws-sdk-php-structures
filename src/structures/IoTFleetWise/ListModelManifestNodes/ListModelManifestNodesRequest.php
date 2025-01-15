<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifestNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListModelManifestNodesRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
