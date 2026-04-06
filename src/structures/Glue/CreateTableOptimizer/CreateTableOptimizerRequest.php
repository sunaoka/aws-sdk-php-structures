<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTableOptimizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'compaction'|'retention'|'orphan_file_deletion' $Type
 * @property Shapes\TableOptimizerConfiguration $TableOptimizerConfiguration
 */
class CreateTableOptimizerRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Type: 'compaction'|'retention'|'orphan_file_deletion',
     *     TableOptimizerConfiguration: Shapes\TableOptimizerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
