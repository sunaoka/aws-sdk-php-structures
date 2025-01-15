<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationScopes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $nextToken
 */
class ListClassificationScopesRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
