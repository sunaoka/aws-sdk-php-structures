<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIngestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSetId
 * @property string $NextToken
 * @property string $AwsAccountId
 * @property int<1, 100> $MaxResults
 */
class ListIngestionsRequest extends Request
{
    /**
     * @param array{
     *     DataSetId: string,
     *     NextToken?: string,
     *     AwsAccountId: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
