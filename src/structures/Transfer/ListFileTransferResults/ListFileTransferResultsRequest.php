<?php

namespace Sunaoka\Aws\Structures\Transfer\ListFileTransferResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $TransferId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListFileTransferResultsRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     TransferId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
