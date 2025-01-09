<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeImageScanFindingsRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageId: Shapes\ImageIdentifier,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
