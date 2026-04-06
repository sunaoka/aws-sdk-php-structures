<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $modelManifestArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDecoderManifestsRequest extends Request
{
    /**
     * @param array{
     *     modelManifestArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
