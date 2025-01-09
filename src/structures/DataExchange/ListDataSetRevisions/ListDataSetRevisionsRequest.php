<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSetRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListDataSetRevisionsRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
