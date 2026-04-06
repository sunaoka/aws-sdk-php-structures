<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $arns
 * @property 'NONE'|'SUPPRESS'|null $action
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListFiltersRequest extends Request
{
    /**
     * @param array{
     *     arns?: list<string>|null,
     *     action?: 'NONE'|'SUPPRESS'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
