<?php

namespace Sunaoka\Aws\Structures\Omics\BatchDeleteReadSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 * @property string $sequenceStoreId
 */
class BatchDeleteReadSetRequest extends Request
{
    /**
     * @param array{
     *     ids: list<string>,
     *     sequenceStoreId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
