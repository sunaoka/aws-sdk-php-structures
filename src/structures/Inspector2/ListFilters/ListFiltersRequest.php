<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'SUPPRESS'|null $action
 * @property list<string>|null $arns
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListFiltersRequest extends Request
{
    /**
     * @param array{
     *     action?: 'NONE'|'SUPPRESS'|null,
     *     arns?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
