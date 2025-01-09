<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTableOptimizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'compaction'|'retention'|'orphan_file_deletion' $Type
 */
class DeleteTableOptimizerRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Type: 'compaction'|'retention'|'orphan_file_deletion'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
