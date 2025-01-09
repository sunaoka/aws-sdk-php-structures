<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageIds?: list<Shapes\ImageIdentifier>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
