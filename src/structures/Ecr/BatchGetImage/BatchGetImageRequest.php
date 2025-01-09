<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 * @property list<string> $acceptedMediaTypes
 */
class BatchGetImageRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageIds: list<Shapes\ImageIdentifier>,
     *     acceptedMediaTypes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
