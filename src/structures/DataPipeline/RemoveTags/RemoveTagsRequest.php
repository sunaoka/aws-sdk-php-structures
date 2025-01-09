<?php

namespace Sunaoka\Aws\Structures\DataPipeline\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<string> $tagKeys
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     tagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
