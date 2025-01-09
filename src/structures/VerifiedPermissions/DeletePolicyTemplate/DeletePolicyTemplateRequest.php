<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeletePolicyTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $policyTemplateId
 */
class DeletePolicyTemplateRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyTemplateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
