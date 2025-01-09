<?php

namespace Sunaoka\Aws\Structures\Ecr\PutImageTagMutability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property 'MUTABLE'|'IMMUTABLE' $imageTagMutability
 */
class PutImageTagMutabilityRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     imageTagMutability: 'MUTABLE'|'IMMUTABLE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
