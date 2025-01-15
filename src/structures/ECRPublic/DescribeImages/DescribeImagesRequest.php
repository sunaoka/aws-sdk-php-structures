<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier>|null $imageIds
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeImagesRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageIds?: list<Shapes\ImageIdentifier>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
