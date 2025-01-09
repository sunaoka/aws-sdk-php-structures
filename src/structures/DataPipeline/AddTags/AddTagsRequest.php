<?php

namespace Sunaoka\Aws\Structures\DataPipeline\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<Shapes\Tag> $tags
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
