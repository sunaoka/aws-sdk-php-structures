<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeImageTagsRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
