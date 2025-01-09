<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 * @property list<string> $names
 */
class BatchGetCollectionRequest extends Request
{
    /**
     * @param array{
     *     ids?: list<string>,
     *     names?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
