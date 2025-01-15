<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string $ResourceARN
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
