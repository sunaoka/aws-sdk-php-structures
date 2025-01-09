<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'compaction'|'retention'|'orphan_file_deletion' $Type
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListTableOptimizerRunsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Type: 'compaction'|'retention'|'orphan_file_deletion',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
