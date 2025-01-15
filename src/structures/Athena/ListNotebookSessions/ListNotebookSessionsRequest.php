<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListNotebookSessionsRequest extends Request
{
    /**
     * @param array{
     *     NotebookId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
