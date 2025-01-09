<?php

namespace Sunaoka\Aws\Structures\Iam\TagUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property list<Shapes\Tag> $Tags
 */
class TagUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
