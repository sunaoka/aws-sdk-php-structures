<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $policyStoreId
 * @property string|null $description
 * @property string $statement
 */
class CreatePolicyTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     policyStoreId: string,
     *     description?: string|null,
     *     statement: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
