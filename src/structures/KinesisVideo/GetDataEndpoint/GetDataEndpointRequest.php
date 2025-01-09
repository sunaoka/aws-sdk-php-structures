<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetDataEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'PUT_MEDIA'|'GET_MEDIA'|'LIST_FRAGMENTS'|'GET_MEDIA_FOR_FRAGMENT_LIST'|'GET_HLS_STREAMING_SESSION_URL'|'GET_DASH_STREAMING_SESSION_URL'|'GET_CLIP'|'GET_IMAGES' $APIName
 */
class GetDataEndpointRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     APIName: 'PUT_MEDIA'|'GET_MEDIA'|'LIST_FRAGMENTS'|'GET_MEDIA_FOR_FRAGMENT_LIST'|'GET_HLS_STREAMING_SESSION_URL'|'GET_DASH_STREAMING_SESSION_URL'|'GET_CLIP'|'GET_IMAGES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
