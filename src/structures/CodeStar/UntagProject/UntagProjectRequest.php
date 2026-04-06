<?php

namespace Sunaoka\Aws\Structures\CodeStar\UntagProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<string> $tags
 */
class UntagProjectRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     tags: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
