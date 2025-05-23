<?php

namespace Sunaoka\Aws\Structures\Transfer\ListFileTransferResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 * @property string $TransferId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListFileTransferResultsRequest extends Request
{
    /**
     * @param array{
     *     ConnectorId: string,
     *     TransferId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
