<?php

namespace Sunaoka\Aws\Structures\Glue\BatchDeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property list<string> $ConnectionNameList
 */
class BatchDeleteConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ConnectionNameList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
