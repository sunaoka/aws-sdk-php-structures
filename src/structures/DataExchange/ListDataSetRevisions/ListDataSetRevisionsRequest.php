<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSetRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property int<1, 200>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDataSetRevisionsRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     MaxResults?: int<1, 200>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
