<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $ecrRepositoryPrefix
 * @property string|null $credentialArn
 * @property string|null $customRoleArn
 */
class UpdatePullThroughCacheRuleRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     ecrRepositoryPrefix: string,
     *     credentialArn?: string|null,
     *     customRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
