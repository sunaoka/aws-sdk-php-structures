<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEngineVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'microfocus'|'bluage' $engineType
 * @property int<1, 2000> $maxResults
 * @property string $nextToken
 */
class ListEngineVersionsRequest extends Request
{
    /**
     * @param array{
     *     engineType?: 'microfocus'|'bluage',
     *     maxResults?: int<1, 2000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
