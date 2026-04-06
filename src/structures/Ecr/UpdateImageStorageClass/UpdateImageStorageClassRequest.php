<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdateImageStorageClass;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property Shapes\ImageIdentifier $imageId
 * @property 'STANDARD'|'ARCHIVE' $targetStorageClass
 */
class UpdateImageStorageClassRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageId: Shapes\ImageIdentifier,
     *     targetStorageClass: 'STANDARD'|'ARCHIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
