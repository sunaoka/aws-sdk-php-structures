<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudios;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListStudiosRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
