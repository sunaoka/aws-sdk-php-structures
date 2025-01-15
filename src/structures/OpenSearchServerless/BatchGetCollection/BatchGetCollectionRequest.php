<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ids
 * @property list<string>|null $names
 */
class BatchGetCollectionRequest extends Request
{
    /**
     * @param array{
     *     ids?: list<string>|null,
     *     names?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
