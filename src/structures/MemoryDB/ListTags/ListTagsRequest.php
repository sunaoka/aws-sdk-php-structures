<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
