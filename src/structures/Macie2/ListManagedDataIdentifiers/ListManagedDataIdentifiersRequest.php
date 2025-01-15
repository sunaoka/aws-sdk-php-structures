<?php

namespace Sunaoka\Aws\Structures\Macie2\ListManagedDataIdentifiers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListManagedDataIdentifiersRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
