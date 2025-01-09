<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImageTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class DescribeImageTagsRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
