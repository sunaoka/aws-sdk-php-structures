<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $Expression
 * @property string|null $NextToken
 * @property Shapes\Segment|null $Segment
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $ExcludeColumnSchema
 * @property string|null $TransactionId
 * @property \Aws\Api\DateTimeResult|null $QueryAsOfTime
 */
class GetPartitionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     TableName: string,
     *     Expression?: string|null,
     *     NextToken?: string|null,
     *     Segment?: Shapes\Segment|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ExcludeColumnSchema?: bool|null,
     *     TransactionId?: string|null,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
