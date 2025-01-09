<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListModelManifests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $signalCatalogArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListModelManifestsRequest extends Request
{
    /**
     * @param array{
     *     signalCatalogArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
