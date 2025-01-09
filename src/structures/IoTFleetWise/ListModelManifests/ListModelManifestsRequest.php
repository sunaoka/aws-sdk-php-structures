<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $signalCatalogArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListModelManifestsRequest extends Request
{
    /**
     * @param array{
     *     signalCatalogArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
