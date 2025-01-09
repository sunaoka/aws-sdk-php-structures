<?php

namespace Sunaoka\Aws\Structures\FMS\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\Tag> $TagList
 */
class TagResourceRequest extends Request
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
