<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageReplicationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property string $registryId
 */
class DescribeImageReplicationStatusRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     imageId: Shapes\ImageIdentifier,
     *     registryId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
