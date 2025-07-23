<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageTagMutability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property 'MUTABLE'|'IMMUTABLE'|'IMMUTABLE_WITH_EXCLUSION'|'MUTABLE_WITH_EXCLUSION' $imageTagMutability
 * @property list<Shapes\ImageTagMutabilityExclusionFilter>|null $imageTagMutabilityExclusionFilters
 */
class PutImageTagMutabilityRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     imageTagMutability: 'MUTABLE'|'IMMUTABLE'|'IMMUTABLE_WITH_EXCLUSION'|'MUTABLE_WITH_EXCLUSION',
     *     imageTagMutabilityExclusionFilters?: list<Shapes\ImageTagMutabilityExclusionFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
