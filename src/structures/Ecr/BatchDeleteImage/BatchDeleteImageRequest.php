<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchDeleteImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 */
class BatchDeleteImageRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageIds: list<Shapes\ImageIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
