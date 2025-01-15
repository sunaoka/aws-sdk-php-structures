<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property Shapes\ListImagesFilter|null $filter
 */
class ListImagesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     filter?: Shapes\ListImagesFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
