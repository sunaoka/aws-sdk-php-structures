<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
