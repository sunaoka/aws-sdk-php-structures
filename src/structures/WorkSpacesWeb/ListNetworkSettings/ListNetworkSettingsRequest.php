<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListNetworkSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $maxResults
 * @property string $nextToken
 */
class ListNetworkSettingsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
