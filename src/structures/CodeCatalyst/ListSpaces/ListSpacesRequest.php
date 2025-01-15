<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListSpacesRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
