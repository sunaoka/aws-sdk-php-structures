<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListProviderServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<15, 25> $maxResults
 * @property string $nextToken
 * @property string $providerName
 */
class ListProviderServicesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<15, 25>,
     *     nextToken?: string,
     *     providerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
