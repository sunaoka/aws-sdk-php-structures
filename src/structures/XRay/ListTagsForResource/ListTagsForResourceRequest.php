<?php

namespace Sunaoka\Aws\Structures\XRay\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
