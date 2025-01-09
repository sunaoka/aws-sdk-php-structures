<?php

namespace Sunaoka\Aws\Structures\Ecr\DeletePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ecrRepositoryPrefix
 * @property string $registryId
 */
class DeletePullThroughCacheRuleRequest extends Request
{
    /**
     * @param array{
     *     ecrRepositoryPrefix: string,
     *     registryId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
