<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'microfocus'|'bluage' $engineType
 * @property int $maxResults
 * @property list<string> $names
 * @property string $nextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     engineType?: 'microfocus'|'bluage',
     *     maxResults?: int,
     *     names?: list<string>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
