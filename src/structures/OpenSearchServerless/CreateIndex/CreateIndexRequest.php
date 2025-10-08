<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $indexName
 * @property Shapes\IndexSchema|null $indexSchema
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     indexName: string,
     *     indexSchema?: Shapes\IndexSchema|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
