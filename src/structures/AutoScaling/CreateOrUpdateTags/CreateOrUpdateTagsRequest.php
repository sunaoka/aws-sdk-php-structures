<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateOrUpdateTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Tag> $Tags
 */
class CreateOrUpdateTagsRequest extends Request
{
    /**
     * @param array{Tags: list<Shapes\Tag>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
