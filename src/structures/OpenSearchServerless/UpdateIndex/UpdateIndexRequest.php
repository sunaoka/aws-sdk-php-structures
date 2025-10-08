<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $indexName
 * @property Shapes\IndexSchema|null $indexSchema
 */
class UpdateIndexRequest extends Request
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
