<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelManifestArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDecoderManifestsRequest extends Request
{
    /**
     * @param array{
     *     modelManifestArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
