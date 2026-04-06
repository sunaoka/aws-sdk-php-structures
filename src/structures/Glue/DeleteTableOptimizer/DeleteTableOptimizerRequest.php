<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTableOptimizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property 'compaction' $Type
 */
class DeleteTableOptimizerRequest extends Request
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     Type: 'compaction'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
