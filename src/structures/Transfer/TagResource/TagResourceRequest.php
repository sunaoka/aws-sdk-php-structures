<?php

namespace Sunaoka\Aws\Structures\Transfer\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<Shapes\Tag> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
