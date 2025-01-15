<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string|null $NextToken
 * @property int<0, max>|null $Limit
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     NextToken?: string|null,
     *     Limit?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
