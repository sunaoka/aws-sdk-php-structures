<?php

namespace Sunaoka\Aws\Structures\Ecr\GetLifecyclePolicyPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property list<Shapes\ImageIdentifier> $imageIds
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property Shapes\LifecyclePolicyPreviewFilter $filter
 */
class GetLifecyclePolicyPreviewRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageIds?: list<Shapes\ImageIdentifier>,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     filter?: Shapes\LifecyclePolicyPreviewFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
