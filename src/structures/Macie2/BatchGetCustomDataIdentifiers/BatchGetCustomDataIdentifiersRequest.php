<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchGetCustomDataIdentifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 */
class BatchGetCustomDataIdentifiersRequest extends Request
{
    /**
     * @param array{ids?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
