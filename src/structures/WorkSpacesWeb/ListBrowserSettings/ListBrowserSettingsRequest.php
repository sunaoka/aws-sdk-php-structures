<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $maxResults
 * @property string|null $nextToken
 */
class ListBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, max>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
