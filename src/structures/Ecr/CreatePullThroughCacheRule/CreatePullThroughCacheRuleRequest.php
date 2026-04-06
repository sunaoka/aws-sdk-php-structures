<?php

namespace Sunaoka\Aws\Structures\Ecr\CreatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ecrRepositoryPrefix
 * @property string $upstreamRegistryUrl
 * @property string|null $registryId
 */
class CreatePullThroughCacheRuleRequest extends Request
{
    /**
     * @param array{
     *     ecrRepositoryPrefix: string,
     *     upstreamRegistryUrl: string,
     *     registryId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
