<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchGetCustomDataIdentifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ids
 */
class BatchGetCustomDataIdentifiersRequest extends Request
{
    /**
     * @param array{ids?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
