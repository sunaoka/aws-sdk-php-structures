<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListImagePipelineImagesRequest extends Request
{
    /**
     * @param array{
     *     imagePipelineArn: string,
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
