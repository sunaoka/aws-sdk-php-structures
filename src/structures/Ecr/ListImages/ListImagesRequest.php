<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 * @property Shapes\ListImagesFilter $filter
 */
class ListImagesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>,
     *     filter?: Shapes\ListImagesFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
