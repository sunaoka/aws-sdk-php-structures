<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListProviderServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<15, 25>|null $maxResults
 * @property string|null $providerName
 */
class ListProviderServicesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<15, 25>|null,
     *     providerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
