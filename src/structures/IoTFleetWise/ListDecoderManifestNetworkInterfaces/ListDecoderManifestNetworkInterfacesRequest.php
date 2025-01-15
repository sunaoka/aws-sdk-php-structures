<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDecoderManifestNetworkInterfacesRequest extends Request
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
