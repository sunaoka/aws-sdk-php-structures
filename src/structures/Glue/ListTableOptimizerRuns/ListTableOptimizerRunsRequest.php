<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'compaction'|'retention'|'orphan_file_deletion' $Type
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListTableOptimizerRunsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Type: 'compaction'|'retention'|'orphan_file_deletion',
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
