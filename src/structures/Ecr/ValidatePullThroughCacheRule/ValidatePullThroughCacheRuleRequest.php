<?php

namespace Sunaoka\Aws\Structures\Ecr\ValidatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ecrRepositoryPrefix
 * @property string|null $registryId
 */
class ValidatePullThroughCacheRuleRequest extends Request
{
    /**
     * @param array{
     *     ecrRepositoryPrefix: string,
     *     registryId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
