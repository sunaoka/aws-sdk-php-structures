<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 * @property string $nextToken
 * @property int $maxResults
 * @property Shapes\DescribeImagesFilter $filter
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageIds?: list<Shapes\ImageIdentifier>,
     *     nextToken?: string,
     *     maxResults?: int,
     *     filter?: Shapes\DescribeImagesFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
