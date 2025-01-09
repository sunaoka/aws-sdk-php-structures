<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property string $NextToken
 * @property int $Limit
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
