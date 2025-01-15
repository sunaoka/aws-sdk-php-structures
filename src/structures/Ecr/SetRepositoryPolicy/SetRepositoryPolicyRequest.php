<?php

namespace Sunaoka\Aws\Structures\Ecr\SetRepositoryPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string $policyText
 * @property bool|null $force
 */
class SetRepositoryPolicyRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     policyText: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
