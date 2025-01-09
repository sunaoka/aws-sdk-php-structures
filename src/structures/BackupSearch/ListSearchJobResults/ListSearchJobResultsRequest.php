<?php

namespace Sunaoka\Aws\Structures\BackupSearch\ListSearchJobResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchJobIdentifier
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListSearchJobResultsRequest extends Request
{
    /**
     * @param array{
     *     SearchJobIdentifier: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
