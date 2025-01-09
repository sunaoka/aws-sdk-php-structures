<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListDecoderManifestNetworkInterfacesRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
