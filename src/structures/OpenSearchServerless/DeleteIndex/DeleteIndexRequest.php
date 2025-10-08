<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $indexName
 */
class DeleteIndexRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     indexName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
