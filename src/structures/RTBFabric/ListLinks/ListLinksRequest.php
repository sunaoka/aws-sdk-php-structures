<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListLinksRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
