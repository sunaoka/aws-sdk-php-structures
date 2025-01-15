<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageTagMutability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property 'MUTABLE'|'IMMUTABLE'|null $imageTagMutability
 */
class PutImageTagMutabilityResponse extends Response
{
}
