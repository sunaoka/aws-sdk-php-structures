<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListEulas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $eulaIds
 * @property string|null $nextToken
 */
class ListEulasRequest extends Request
{
    /**
     * @param array{
     *     eulaIds?: list<string>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
