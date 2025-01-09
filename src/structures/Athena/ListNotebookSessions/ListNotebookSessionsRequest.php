<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NotebookId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListNotebookSessionsRequest extends Request
{
    /**
     * @param array{
     *     NotebookId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
