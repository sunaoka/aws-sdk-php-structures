<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $Expression
 * @property string $NextToken
 * @property Shapes\Segment $Segment
 * @property int<1, 1000> $MaxResults
 * @property bool $ExcludeColumnSchema
 * @property string $TransactionId
 * @property \Aws\Api\DateTimeResult $QueryAsOfTime
 */
class GetPartitionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Expression?: string,
     *     NextToken?: string,
     *     Segment?: Shapes\Segment,
     *     MaxResults?: int<1, 1000>,
     *     ExcludeColumnSchema?: bool,
     *     TransactionId?: string,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
