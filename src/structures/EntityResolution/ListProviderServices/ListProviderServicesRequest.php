<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListProviderServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<15, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $providerName
 */
class ListProviderServicesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<15, 25>|null,
     *     nextToken?: string|null,
     *     providerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
