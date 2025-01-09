<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageTagMutability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property 'MUTABLE'|'IMMUTABLE' $imageTagMutability
 */
class PutImageTagMutabilityResponse extends Response
{
}
