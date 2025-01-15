<?php

namespace Sunaoka\Aws\Structures\Organizations\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string|null $NextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
