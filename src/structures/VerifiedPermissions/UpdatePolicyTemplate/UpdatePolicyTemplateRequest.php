<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicyTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $policyTemplateId
 * @property string $description
 * @property string $statement
 */
class UpdatePolicyTemplateRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyTemplateId: string,
     *     description?: string,
     *     statement: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
