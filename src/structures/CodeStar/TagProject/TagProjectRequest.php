<?php

namespace Sunaoka\Aws\Structures\CodeStar\TagProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property array<string, string> $tags
 */
class TagProjectRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
