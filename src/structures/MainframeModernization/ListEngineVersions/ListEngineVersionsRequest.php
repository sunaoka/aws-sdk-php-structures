<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'microfocus'|'bluage' $engineType
 * @property int $maxResults
 * @property string $nextToken
 */
class ListEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     engineType?: 'microfocus'|'bluage',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
