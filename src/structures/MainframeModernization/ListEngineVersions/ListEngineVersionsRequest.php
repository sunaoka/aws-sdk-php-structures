<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'microfocus'|'bluage'|null $engineType
 * @property int<1, 2000>|null $maxResults
 * @property string|null $nextToken
 */
class ListEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     engineType?: 'microfocus'|'bluage'|null,
     *     maxResults?: int<1, 2000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
