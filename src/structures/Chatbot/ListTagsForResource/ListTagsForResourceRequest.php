<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{ResourceARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
