<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImagePipelineImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 * @property list<Shapes\Filter> $filters
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 */
class ListImagePipelineImagesRequest extends Request
{
    /**
     * @param array{
     *     imagePipelineArn: string,
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
