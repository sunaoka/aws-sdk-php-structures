<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property int $maxResults
 * @property 'ALL'|'RUNNING'|'WAITING'|'CANCELLING'|null $state
 */
class ListQueriesRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     maxResults: int,
     *     state?: 'ALL'|'RUNNING'|'WAITING'|'CANCELLING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
