<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListBrowserSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 */
class ListBrowserSettingsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
