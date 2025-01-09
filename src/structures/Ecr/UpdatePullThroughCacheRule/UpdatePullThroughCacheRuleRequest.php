<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $ecrRepositoryPrefix
 * @property string $credentialArn
 */
class UpdatePullThroughCacheRuleRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     ecrRepositoryPrefix: string,
     *     credentialArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
