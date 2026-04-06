<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetPolicyStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property bool|null $tags
 */
class GetPolicyStoreRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     tags?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
