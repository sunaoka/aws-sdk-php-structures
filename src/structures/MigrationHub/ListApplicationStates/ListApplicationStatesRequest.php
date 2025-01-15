<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListApplicationStates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ApplicationIds
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListApplicationStatesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
