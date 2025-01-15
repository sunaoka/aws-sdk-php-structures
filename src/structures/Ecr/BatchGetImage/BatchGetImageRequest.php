<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 * @property list<string>|null $acceptedMediaTypes
 */
class BatchGetImageRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageIds: list<Shapes\ImageIdentifier>,
     *     acceptedMediaTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
