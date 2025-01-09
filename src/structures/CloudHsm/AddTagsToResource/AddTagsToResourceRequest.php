<?php

namespace Sunaoka\Aws\Structures\CloudHsm\AddTagsToResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\Tag> $TagList
 */
class AddTagsToResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     TagList: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
