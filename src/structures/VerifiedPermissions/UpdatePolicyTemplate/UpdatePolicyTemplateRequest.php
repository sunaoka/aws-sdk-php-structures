<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdatePolicyTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $policyTemplateId
 * @property string|null $description
 * @property string $statement
 * @property string|null $name
 */
class UpdatePolicyTemplateRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     policyTemplateId: string,
     *     description?: string|null,
     *     statement: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
