<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageTagMutability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property 'MUTABLE'|'IMMUTABLE'|'IMMUTABLE_WITH_EXCLUSION'|'MUTABLE_WITH_EXCLUSION'|null $imageTagMutability
 * @property list<Shapes\ImageTagMutabilityExclusionFilter>|null $imageTagMutabilityExclusionFilters
 */
class PutImageTagMutabilityResponse extends Response
{
}
