<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageSigningStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property string|null $registryId
 */
class DescribeImageSigningStatusRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     imageId: Shapes\ImageIdentifier,
     *     registryId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
