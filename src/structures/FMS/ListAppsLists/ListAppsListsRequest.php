<?php

namespace Sunaoka\Aws\Structures\FMS\ListAppsLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DefaultLists
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListAppsListsRequest extends Request
{
    /**
     * @param array{
     *     DefaultLists?: bool,
     *     NextToken?: string,
     *     MaxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
