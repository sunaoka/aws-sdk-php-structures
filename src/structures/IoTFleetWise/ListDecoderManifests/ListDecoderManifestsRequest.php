<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $modelManifestArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'METADATA_ONLY'|null $listResponseScope
 */
class ListDecoderManifestsRequest extends Request
{
    /**
     * @param array{
     *     modelManifestArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     listResponseScope?: 'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
