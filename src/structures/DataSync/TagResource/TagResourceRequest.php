<?php

namespace Sunaoka\Aws\Structures\DataSync\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\TagListEntry> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Tags: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
