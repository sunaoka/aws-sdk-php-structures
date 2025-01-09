<?php

namespace Sunaoka\Aws\Structures\Ecr\ValidatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ecrRepositoryPrefix
 * @property string $registryId
 */
class ValidatePullThroughCacheRuleRequest extends Request
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
