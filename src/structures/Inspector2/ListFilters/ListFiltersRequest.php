<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'SUPPRESS' $action
 * @property list<string> $arns
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListFiltersRequest extends Request
{
    /**
     * @param array{
     *     action?: 'NONE'|'SUPPRESS',
     *     arns?: list<string>,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
