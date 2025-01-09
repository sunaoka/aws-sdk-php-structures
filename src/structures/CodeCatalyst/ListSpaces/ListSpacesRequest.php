<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListSpacesRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
