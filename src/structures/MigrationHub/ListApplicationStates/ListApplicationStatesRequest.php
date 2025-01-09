<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListApplicationStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ApplicationIds
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListApplicationStatesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
