<?php

namespace Sunaoka\Aws\Structures\ECRPublic\BatchDeleteImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 */
class BatchDeleteImageRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageIds: list<Shapes\ImageIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
