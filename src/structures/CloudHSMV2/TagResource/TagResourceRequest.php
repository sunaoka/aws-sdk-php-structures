<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property list<Shapes\Tag> $TagList
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     TagList: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
