<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageIds?: list<Shapes\ImageIdentifier>,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
