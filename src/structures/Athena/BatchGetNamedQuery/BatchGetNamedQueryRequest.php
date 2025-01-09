<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetNamedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $NamedQueryIds
 */
class BatchGetNamedQueryRequest extends Request
{
    /**
     * @param array{NamedQueryIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
