<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicyTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $policyStoreId
 * @property string $description
 * @property string $statement
 */
class CreatePolicyTemplateRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     policyStoreId: string,
     *     description?: string,
     *     statement: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
