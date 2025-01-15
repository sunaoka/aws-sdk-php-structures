<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'microfocus'|'bluage'|null $engineType
 * @property int<1, 2000>|null $maxResults
 * @property list<string>|null $names
 * @property string|null $nextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     engineType?: 'microfocus'|'bluage'|null,
     *     maxResults?: int<1, 2000>|null,
     *     names?: list<string>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
