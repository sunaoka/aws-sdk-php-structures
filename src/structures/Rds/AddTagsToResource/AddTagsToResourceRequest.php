<?php

namespace Sunaoka\Aws\Structures\Rds\AddTagsToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsToResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceName: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
