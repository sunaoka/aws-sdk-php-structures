<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeImageScanFindingsRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageId: Shapes\ImageIdentifier,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
