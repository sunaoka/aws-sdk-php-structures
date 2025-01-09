<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\Tag;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property array<string, string> $Tags
 */
class TagRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
